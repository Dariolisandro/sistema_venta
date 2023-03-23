<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Product;

return new class extends Migration
{
    public function up()
    {
        Schema::create('purchases_details', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('purchases_id');
            $table->foreign('purchases_id')->references('id')->on('purchases');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            $table->integer('quantity');

            $table->decimal('price');

            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('purchases_details');
    }
};
