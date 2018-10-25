<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estate_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('estate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('since')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('sell_price')->nullable();
            $table->date('date')->nullable();
            $table->string('offer')->nullable();
            $table->integer('estate_type_id')->unsigned();
            $table->integer('case_id')->unsigned();
            $table->timestamps();

            $table->foreign('estate_type_id')->references('id')->on('estate_type')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('case_id')->references('id')->on('cases')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estate');
        Schema::dropIfExists('estate_type');
    }
}
