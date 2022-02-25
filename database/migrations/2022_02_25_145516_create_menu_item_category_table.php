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
        Schema::create('menu_item_category', function (Blueprint $table) {

            $table->bigInteger('menuItemId')->unsigned();
            $table->bigInteger('categoryId')->unsigned();
            $table->foreign('categoryId')->references('id')->on('category');
            $table->foreign('menuItemId')->references('id')->on('menu_item');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_item_category');
    }
};
