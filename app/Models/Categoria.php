<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table='categoria';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'foto',
        'seccao_id',
        'estado'
    ];
    public function seccao()
    {
        return $this->belongsTo(Seccao::class,'seccao_id','id');
    }
    public function sub_categorias()
    {
        return $this->hasMany(Sub_categoria::class,'categoria_id',"id");
    }
}
