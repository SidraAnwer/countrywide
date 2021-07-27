<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->text('description')->nullable();
            $table->string('quantity')->nullable();
            $table->integer('unit')->nullable();
            $table->string('total')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->text('labor_category')->nullable();
            $table->string('regularly_hours')->nullable();
            $table->string('premium_hours')->nullable();
            $table->string('over_time_hours')->nullable();
            $table->string('double_time')->nullable();
            $table->string('labor_total')->nullable();
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
