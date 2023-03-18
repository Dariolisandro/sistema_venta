<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Providers', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('email'); 
            $table->string('rut'); 
            $table->string('address')->nullable(); 
            $table->string('phone');
            $table->string('giro');    
            $table->string('razonSocial');    
     
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Providers');
    }
};
