<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $timestamps = false;

    protected $table = 'roles';

    protected $fillable = [
        'rol_nombre',
        'rol_descripcion',
        'fecha_creacion'
    ];

    public function usuarios(){
        return $this->hasMany(Usuario::class, 'rol_id');
    }
}
