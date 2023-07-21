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
        Schema::create('detalle_accions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('accion',255);
            //$table->enum('tipo',['informe','taller', 'acción'])->default('informe');
            //$table->enum('mes',['enero','febrero', 'marzo','abril','mayo','junio','julio','agosto','setiembre','octubre','noviembre','diciembre'])->default('enero');
            //$table->integer('total');
            //$table->string('clasificador',255);
            $table->string('acumulable',255);
            $table->string('um_accion',255);
            $table->string('total_prog',255);           
            $table->integer('cant_ene');
            $table->integer('cant_feb');
            $table->integer('cant_mar');
            $table->integer('cant_abr');
            $table->integer('cant_may');
            $table->integer('cant_jun');
            $table->integer('cant_jul');
            $table->integer('cant_ago');
            $table->integer('cant_set');
            $table->integer('cant_oct');
            $table->integer('cant_nov');
            $table->integer('cant_dic');
            $table->integer('total_eje');
            $table->integer('eje_ene');
            $table->integer('eje_feb');
            $table->integer('eje_mar');
            $table->integer('eje_abr');
            $table->integer('eje_may');
            $table->integer('eje_jun');
            $table->integer('eje_jul');
            $table->integer('eje_ago');
            $table->integer('eje_set');
            $table->integer('eje_oct');
            $table->integer('eje_nov');
            $table->integer('eje_dic');
            

            
            $table->unsignedBigInteger('id_accions');
            $table->foreign('id_accions')->references('id')->on('tareas');
            //$table->enum('siaf',['por certificar','certificado', 'devengado'])->default('por certificar');
             $table->char('estado',1)->default('1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_accions');
    }
};
