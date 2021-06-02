<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItemTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('producer_id')->unsigned();
            $table->string('name')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign("producer_id")->references("id")->on("producer");
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