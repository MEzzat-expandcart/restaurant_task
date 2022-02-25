<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('menuItemId');
            $table->bigInteger('orderId');
            $table->float('price')->default('0');
            $table->float('discount')->default('0');
            $table->smallInteger('quantity')->default('0');
            $table->datetime('createdAt');
            $table->datetime('updatedAt')->nullable();
            $table->foreign('orderId')->references('id')->on('order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_item');
    }
};
