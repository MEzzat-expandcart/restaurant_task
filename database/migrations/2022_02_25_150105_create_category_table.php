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
        Schema::create('category', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('title',75);
            $table->string('slug',100);
            $table->text('content');
            $table->bigInteger('parentId',20)->nullable()->default('NULL');
            $table->primary('id');
            $table->foreign('parentId')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
};
