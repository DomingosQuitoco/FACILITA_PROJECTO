<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_categoria extends Model
{
    use HasFactory;
    protected $table='sub_categoria';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'categoria_id',
        'estado'
    ];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class,'categoria_id','id');
    }

}
