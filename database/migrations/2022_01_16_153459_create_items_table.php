<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->longText('detail');
            $table->string('photo');
            $table->string('thumb');
            $table->string('color')->nullable();
            $table->double('price');
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('diameter')->nullable();
            $table->string('weight');
            $table->unsignedBigInteger('item_category_id');
            $table->foreign('item_category_id')->references('id')->on('item_categories');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('init_qnt')->default(1);
            $table->string('status')->default('available');
            $table->string('badge')->nullable()->default('NEW');
            $table->string('tags')->nullable();
            $table->integer('visit')->default(0);

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
        Schema::dropIfExists('items');
    }
}
