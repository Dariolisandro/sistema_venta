<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


return new class extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('code')->unique();
            $table->string('name')->unique(); 
            $table->integer('stock'); 
            $table->string('image'); 
            $table->decimal('sell_price',12,2); 
            $table->decimal('buy_price',13,2);
            $table->enum('status',['ACTIVE','DEACTIVATED'])->default('ACTIVATE'); 
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('users');
            $table->unsignedBigInteger('provider_id');
            $table->foreign('provider_id')->references('id')->on('users');

            $table->timestamps();
            });

            
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
