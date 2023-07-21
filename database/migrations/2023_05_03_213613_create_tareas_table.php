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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
              $table->string('tarea',255);
            //$table->enum('tipo',['informe','taller', 'acción'])->default('informe');
            //$table->enum('mes',['enero','febrero', 'marzo','abril','mayo','junio','julio','agosto','setiembre','octubre','noviembre','diciembre'])->default('enero');
            //$table->integer('total');   
            $table->string('um_tarea',255);

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
            


            $table->unsignedBigInteger('id_actividads');
            $table->foreign('id_actividads')->references('id')->on('actividads');

            $table->string('representativa',2);//si  o no
             $table->char('estado',1)->default('1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
