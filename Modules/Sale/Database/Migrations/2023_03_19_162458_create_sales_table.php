<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('num_sale');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->dateTime('date');

            $table->decimal('tax');

            $table->decimal('total');

            $table->enum('status',['VALID','CANCELED'])->default('VALID');

            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
