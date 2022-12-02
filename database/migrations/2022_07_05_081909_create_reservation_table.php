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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tables_id');
            $table->unsignedBigInteger('items_id');
            $table->unsignedBigInteger('orders_id');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('tables_id')->references('id')->on('tables');
            $table->foreign('items_id')->references('id')->on('items');
            $table->foreign('orders_id')->references('id')->on('orders')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
};
