<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{

    public function add(){
        
    }


    public function fechar(){
        $pedido = Pedido::where('user_id', Auth::id())->where('status', 'aberto')->first();
        $pedido->status = 'fechado';
        $pedido->save();
    }
}
