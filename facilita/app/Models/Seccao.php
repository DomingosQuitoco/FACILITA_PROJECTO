<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccao extends Model
{
    use HasFactory;
    protected $table='seccao';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'foto',
        'estado'
    ];

    public function categorias()
    {
        return $this->hasMany(Categoria::class,'seccao_id',"id");
    }
}
