<?php

namespace App\Http\Controllers;

use App\Models\ItensPedido;
use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarrinhoController extends Controller
{
    public function add($id)
    {
        $user = Auth::user();
        $produtoId = $id;
        $produto = Produto::findOrFail($produtoId);
        //FirstOrCreate primeiro faz um SELECT no banco para ver se o registro existe com os primeiros parâmetros
        //Caso o registro exista, ele retorna os dados do registro, senão ele cria o registro
        //Caso o registor não exista, eu pego os dados do segundo parâmetro para inicializar outros valores
        $pedido = Pedido::firstOrCreate(
            [
                'user_id' => $user->id,
                'status' => 'aberto'
            ],
            ['total' => 0]
        );
        $item = ItensPedido::where('pedido_id', $pedido->id)->where('produto_id', $produtoId)->first();
        if ($item) {
            $item->quantidade += 1;
            $item->save();
        } else {
            ItensPedido::create([
                'pedido_id' => $pedido->id,
                'produto_id' => $produto->id,
                'quantidade' => 1,
                'preco' => $produto->preco
            ]);
        }

        $pedido->total = ItensPedido::where('pedido_id', $pedido->id)
            ->sum(DB::raw('quantidade * preco')); //DB::raw serve para escrever expressões SQL puras dentro de uma consulta do Laravel.sem tentar interpretar como nome de coluna
        $pedido->save();

        return redirect('home-cli');
    }

    public function remove($id)
    {
        $pedido = Pedido::where('user_id', Auth::id())
            ->where('status', 'aberto')
            ->first();
        $item = ItensPedido::where('pedido_id', $pedido->id)
            ->where('produto_id', $id)
            ->first();
        if ($item) {
            if ($item->quantidade == 1)
                $item->delete();
            else {
                $item->quantidade -= 1;
                $item->save();
            }

            $pedido->total = ItensPedido::where('pedido_id', $pedido->id)
                ->sum(DB::raw("quantidade * preco"));
            $pedido->save();
        }
        return redirect('home-cli');
    }

    public function fechar()
    {
        $pedido = Pedido::where('user_id', Auth::id())->where('status', 'aberto')->first();
        $pedido->status = 'fechado';
        $pedido->save();
        return redirect('home-cli');
    }
}
