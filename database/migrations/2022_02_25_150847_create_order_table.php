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
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token',100);
            $table->smallInteger('status',6)->default('0');
            $table->float('subTotal')->default('0');
            $table->float('tax')->default('0');
            $table->float('shipping')->default('0');
            $table->float('total')->default('0');
            $table->string('customerName',50)->nullable()->default('NULL');
            $table->string('customerMobile',16)->nullable()->default('NULL');
            $table->datetime('createdAt');
            $table->datetime('updatedAt')->nullable()->default('NULL');
            $table->text('content');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
};
