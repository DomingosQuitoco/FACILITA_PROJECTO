<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;
    protected $table='loja';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'nif',
        'logotipo',
        'endereco_id',
        'estado'
    ];
    public function produtos(){
        return $this->belongsToMany(Produto::class,'loja_produto','loja_id','produto_id')->withPivot('preco','quantidade','data_expiracao');
    }
}
