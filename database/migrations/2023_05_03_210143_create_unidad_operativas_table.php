<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unidad_operativas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

             $table->unsignedBigInteger('id_periodos'); //1021
            $table->foreign('id_periodos')->references('id')->on('periodos');

            $table->unsignedBigInteger('id_users');     //1, 2, 3
            $table->foreign('id_users')->references('id')->on('users');

            //$table->string('cod_ugel',255);          //ugel03
            //$table->string('unidad_operativa',255);  //app asgese  (Descripcion)
            $table->decimal('marco', $precision = 9, $scale = 2)->nullable();
            $table->decimal('apm', $precision = 9, $scale = 2)->nullable();
            $table->decimal('da', $precision = 9, $scale = 2)->nullable();
            $table->decimal('necesidad_total', $precision = 9, $scale = 2)->nullable();
            $table->decimal('programado', $precision = 9, $scale = 2)->nullable();            
            $table->char('flg',1)->default('1')->comment('1 liberado, 2 registrado'); // 1 liberado , 2 registrado
            $table->char('estado',1)->default('1');
            //$table->string('tarea',255);  //comentar
           
        });
    }

    /**
     * Reverse the migrations.
     */
    
    public function down(): void
    {
        Schema::dropIfExists('unidad_operativas');
    }
};
