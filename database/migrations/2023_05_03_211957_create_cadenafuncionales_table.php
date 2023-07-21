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
        Schema::create('cadenafuncionales', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
             $table->string('funcion',255);
               $table->string('div_fun',255);
               $table->string('gru_fun',255);
               $table->string('categoria',255)->nullable();
               $table->string('programa',255);
               $table->string('prod',255);
               $table->string('act',255);
               $table->string('finalidad',255);
               $table->string('meta',255); //propuesta usuario
               $table->string('area',255); //propuesta usuario
                
            $table->char('estado',1)->default('1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadenafuncionales');
    }
};
