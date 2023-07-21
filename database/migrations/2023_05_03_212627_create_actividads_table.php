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
        Schema::create('actividads', function (Blueprint $table) {
             $table->id();
            $table->string('cod_ugel',255);//sec_eje
            $table->string('cc',255);
            $table->string('descripcion',255);//sec_func            
            $table->string('unidad_medida',255);

            //$table->string('fisica',255)->nullable();  //comentar
            //$table->string('financiera',255)->nullable();  //comentar
            $table->decimal('fisica', $precision = 9, $scale = 2)->nullable();
            $table->decimal('financiera', $precision = 9, $scale = 2)->nullable();
            //$table->string('um_tarea',255); //comentar
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
          

            $table->unsignedBigInteger('id_area');
            $table->foreign('id_area')->references('id')->on('unidad_operativas');

            /*$table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');*/
             
             
           

             $table->datetime('fecha_aprobacion')->nullable();
            $table->string('observacion')->nullable();
            $table->string('fase')->nullable();
            $table->BigInteger('id_admin')->nullable();
            $table->unsignedBigInteger('aprobado')->default('1')->comment('1:creado 2:aprobado 3:denegado');
             $table->decimal('apm', $precision = 9, $scale = 2)->nullable();
            $table->decimal('da', $precision = 9, $scale = 2)->nullable();
            $table->decimal('necesidad_total', $precision = 9, $scale = 2)->nullable();
               $table->string('denominacion',255);
               $table->string('localizacion',255);
               //$table->string('beneficiario',255);
               $table->string('implementacion',255);

                $table->timestamps();
            $table->char('estado',1)->default('1');

            $table->unsignedBigInteger('id_cadena');
            $table->foreign('id_cadena')->references('id')->on('cadenafuncionales');

            $table->string('id_objetivo',4);
            $table->foreign('id_objetivo')->references('id')->on('objetivos')->onDelete('cascade');;

            $table->string('id_politica',4);
            $table->foreign('id_politica')->references('id')->on('politicas')->onDelete('cascade');;

             //$table->foreign('aprobado')->references('id')->on('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividads');
    }
};
