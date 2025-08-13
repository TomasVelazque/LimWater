<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{

    public function up(): void
    {
        Schema::create('roles', function (Blueprint $tabla) {
            $tabla->id();
            $tabla->string('rol_nombre', 100)->unique();
            $tabla->text('rol_descripcion');
            $tabla->timestamp('fecha_creacion')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
