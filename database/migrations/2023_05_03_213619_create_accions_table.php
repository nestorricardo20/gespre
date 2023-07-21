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
        Schema::create('accions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('denominacion',255)->nullable();;
            //$table->enum('acumulativa',['si','no'])->default('si');
            $table->string('representativa',255);
            //$table->string('um_accion',255);
            //$table->integer('total');
            $table->string('acumulable',255)->nullable();
            $table->string('um_accion',255)->nullable();
            $table->string('total_prog',255)->nullable();
            $table->integer('cant_ene')->nullable();
            $table->integer('cant_feb')->nullable();
            $table->integer('cant_mar')->nullable();
            $table->integer('cant_abr')->nullable();
            $table->integer('cant_may')->nullable();
            $table->integer('cant_jun')->nullable();
            $table->integer('cant_jul')->nullable();
            $table->integer('cant_ago')->nullable();
            $table->integer('cant_set')->nullable();
            $table->integer('cant_oct')->nullable();
            $table->integer('cant_nov')->nullable();
            $table->integer('cant_dic')->nullable();
            $table->integer('total_eje')->nullable();
            $table->integer('eje_ene')->nullable();
            $table->integer('eje_feb')->nullable();
            $table->integer('eje_mar')->nullable();
            $table->integer('eje_abr')->nullable();
            $table->integer('eje_may')->nullable();
            $table->integer('eje_jun')->nullable();
            $table->integer('eje_jul')->nullable();
            $table->integer('eje_ago')->nullable();
            $table->integer('eje_set')->nullable();
            $table->integer('eje_oct')->nullable();
            $table->integer('eje_nov')->nullable();
            $table->integer('eje_dic')->nullable();

            
            $table->unsignedBigInteger('id_tarea');
            $table->foreign('id_tarea')->references('id')->on('tareas');
         //   $table->enum('siaf',['por certificar','certificado', 'devengado'])->default('por certificar');
            $table->string('comentario',255)->nullable();
             $table->char('estado',1)->default('1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accions');
    }
};
