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
        Schema::create('recursos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('denominacion',255);
            //$table->enum('tipo',['informe','taller', 'acción'])->default('informe');
            //$table->enum('mes',['enero','febrero', 'marzo','abril','mayo','junio','julio','agosto','setiembre','octubre','noviembre','diciembre'])->default('enero');
            //$table->integer('total');
            //$table->string('um_tarea',255);

            $table->string('clasificador',255);
            $table->string('acumulable',255);
            $table->string('um_recurso',255);
            $table->string('costo_total',255);
            //$table->string('cant_ene',255);
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
            $table->integer('total_fisico');
            $table->integer('cert_ene');
            $table->integer('cert_feb');
            $table->integer('cert_mar');
            $table->integer('cert_abr');
            $table->integer('cert_may');
            $table->integer('cert_jun');
            $table->integer('cert_jul');
            $table->integer('cert_ago');
            $table->integer('cert_set');
            $table->integer('cert_oct');
            $table->integer('cert_nov');
            $table->integer('cert_dic');
            $table->integer('total_cert_prog');
            $table->integer('dev_ene');
            $table->integer('dev_feb');
            $table->integer('dev_mar');
            $table->integer('dev_abr');
            $table->integer('dev_may');
            $table->integer('dev_jun');
            $table->integer('dev_jul');
            $table->integer('dev_ago');
            $table->integer('dev_set');
            $table->integer('dev_oct');
            $table->integer('dev_nov');
            $table->integer('dev_dic');
            $table->integer('total_dev_prog');
            $table->integer('eje_cert_ene');
            $table->integer('eje_cert_feb');
            $table->integer('eje_cert_mar');
            $table->integer('eje_cert_abr');
            $table->integer('eje_cert_may');
            $table->integer('eje_cert_jun');
            $table->integer('eje_cert_jul');
            $table->integer('eje_cert_ago');
            $table->integer('eje_cert_set');
            $table->integer('eje_cert_oct');
            $table->integer('eje_cert_nov');
            $table->integer('eje_cert_dic');
            $table->integer('total_eje_cert_prog');
            $table->integer('eje_dev_ene');
            $table->integer('eje_dev_feb');
            $table->integer('eje_dev_mar');
            $table->integer('eje_dev_abr');
            $table->integer('eje_dev_may');
            $table->integer('eje_dev_jun');
            $table->integer('eje_dev_jul');
            $table->integer('eje_dev_ago');
            $table->integer('eje_dev_set');
            $table->integer('eje_dev_oct');
            $table->integer('eje_dev_nov');
            $table->integer('eje_dev_dic');
            $table->integer('total_eje_dev_prog');



            
            $table->unsignedBigInteger('id_actividads');
            $table->foreign('id_actividads')->references('id')->on('actividads');

             $table->char('estado',1)->default('1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos');
    }
};
