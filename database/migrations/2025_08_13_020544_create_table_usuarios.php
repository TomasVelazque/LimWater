<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{

    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $tabla) {
            $tabla->id();
            $tabla->string('nombre_completo');
            $tabla->string('gmail')->unique();
            $tabla->string('telefono');
            $tabla->string('clave');
            $tabla->string('calleynum');
            $tabla->string('barrio');
            $tabla->enum('estado', ['Activo', 'Inactivo'])->default('Activo');
            $tabla->foreignId('rol_id')->nullable()->constrained('roles')->onDelete('set null');
            $tabla->timestamp('fecha_creacion')->default(DB::raw('CURRENT_TIMESTAMP'));

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
