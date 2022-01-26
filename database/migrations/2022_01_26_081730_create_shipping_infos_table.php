<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->on('users')->references('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('payer_id')->nullable();
            $table->string('business_name')->nullable();
            $table->string('country_code');
            $table->string('city');
            $table->string('recipient_name')->nullable();
            $table->string('line1')->nullable();
            $table->string('state')->nullable();
            $table->string('street_address')->nullable();
            $table->string('apartment_number')->nullable();
            $table->string('postal_code');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('shipping_infos');
    }
}
