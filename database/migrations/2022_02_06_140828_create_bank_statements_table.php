<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_statements', function (Blueprint $table) {
            $table->id();
                        $table->string('bank_name');
                        $table->float('amount', 10, 2);
                         $table->bigInteger('currency_id')->unsigned();

                          $table->foreign('currency_id')->references('id')->on('currencies');
                        $table->date('date');
                        $table->string('reference_number');
                        $table->string('sender_account');
                        $table->string('merchant_account');
                        $table->string('status')->default('created');
                        $table->bigInteger('user_id')->unsigned();
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
        Schema::dropIfExists('bank_statements');
    }
}
