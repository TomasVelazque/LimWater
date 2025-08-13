<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre_completo',
        'gmail',
        'telefono',
        'clave',
        'calleynum',
        'barrio',
        'estado',
        'rol_id',
        'fecha_creacion'
    ];

    protected $hidden = ['clave'];

    public function rol(){
        return $this->belongsTo(Rol::class, 'rol_id');
    }
}
