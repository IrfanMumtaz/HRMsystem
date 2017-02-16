<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->bigincrements('orderID');
            $table->string('email');
            $table->string('writingServices');
            $table->string('educationLevel');
            $table->string('serviceLevel');
            $table->string('topicTitle');
            $table->string('furtherDetails');
            $table->string('fileAttach');
            $table->string('numberOfPages');
            $table->string('deadline');
            $table->string('pricePerPage');
            $table->string('totalAmount');
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
        //
        Schema::drop('orders');
    }
}
