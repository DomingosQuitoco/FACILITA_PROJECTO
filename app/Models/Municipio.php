<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $table='municipio';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'provincia_id',
        'estado'
    ];
    public function provincia()
    {
        return $this->belongsTo(Provincia::class,'provincia_id','id');
    }
    public function comuna_distritos()
    {
        return $this->hasMany(Comuna_distrito::class,'municipio_id',"id");
    }
}
