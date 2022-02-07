<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_payments', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('tel');
            $table->string('name');
            $table->float('amount', 10, 2);
                        $table->bigInteger('currency_id')->unsigned();

                        $table->foreign('currency_id')->references('id')->on('currencies');
            $table->longText('cart');
            $table->bigInteger('bank_account_id')->unsigned();
            $table->bigInteger('shipping_method_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('status')->default('created');
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
        Schema::dropIfExists('bank_payments');
    }
}
