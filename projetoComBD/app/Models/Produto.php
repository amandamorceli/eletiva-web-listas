<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'preco', 'estoque', 'categoria_id'];

    public function categoria(){
        return $this->belongsTo(Categoria::class); 
        //quando for recuperado um produto, ele irá trazer também a categoria inteira, não só o id
    }
}
