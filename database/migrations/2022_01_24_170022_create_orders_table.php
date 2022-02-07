<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->json('cart');
            $table->bigInteger('shipping_info_id')->unsigned();

            $table->foreign('shipping_info_id')->references('id')->on('shipping_infos')->onDelete('cascade');
            $table->bigInteger('shipping_method_id')->unsigned();

            $table->foreign('shipping_method_id')->references('id')->on('shipping_methods')->onDelete('cascade');
            $table->bigInteger('payment_id')->unsigned();

            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
            $table->string('status')->default('created');
            $table->bigInteger('user_id')->unsigned();
            //FOREIGN KEY CONSTRAINTS
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
