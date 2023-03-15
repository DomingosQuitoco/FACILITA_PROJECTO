<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna_distrito extends Model
{
    use HasFactory;
    protected $table='comuna_distrito';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'municipio_id',
        'tipo',
        'estado'
    ];
    public function municipio()
    {
        return $this->belongsTo(Municipio::class,'municipio_id','id');
    }
    public function enderecos()
    {
        return $this->hasMany(Endereco::class,'comuna_distrito_id',"id");
    }
}
