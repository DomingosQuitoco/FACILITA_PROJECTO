<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $table='endereco';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        'rua',
        'bairro',
        'latitude',
        'longitude',
        'comuna_distrito_id',
        'estado'
    ];
    public function comuna_distrito()
    {
        return $this->belongsTo(Comuna_distrito::class,'comuna_distrito_id','id');
    }

    
}
