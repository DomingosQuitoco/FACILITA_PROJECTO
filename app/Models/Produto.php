<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table='produto';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'codigo',
        'sub_categoria_id',
        'estado'
    ];
    public function lojas(){
        return $this->belongsToMany(Loja::class,'loja_produto','produto_id','loja_id')->withPivot('preco','quantidade','data_expiracao');
    }
}
