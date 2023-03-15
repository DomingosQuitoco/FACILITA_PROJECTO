<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja_produto extends Model
{
    use HasFactory;
    protected $table='loja_produto';
    
    protected $fillable = [
        'loja_id',
        'produto_id',
        'preco',
        'quantidade',
        'data_expiracao',
        'estado'
    ];

    public function loja()
    {
        return $this->belongsTo(Loja::class,'loja_id','id');
    }
    public function produto()
    {
        return $this->belongsTo(Produto::class,'produto_id',"id");
    }
}
