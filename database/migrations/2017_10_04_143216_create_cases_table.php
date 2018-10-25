<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname')->nullable();
            $table->string('name')->nullable();
            $table->string('patron')->nullable();
            $table->string('snils')->nullable();
            $table->string('inn')->nullable();
            $table->string('p_serial')->nullable();
            $table->string('p_number')->nullable();
            $table->string('p_issuer')->nullable();
            $table->string('p_date')->nullable();
            $table->string('date_birth')->nullable();
            $table->string('place_birth')->nullable();
            $table->string('index')->nullable();
            $table->string('region')->nullable();
            $table->string('area')->nullable();
            $table->string('city')->nullable();
            $table->string('community')->nullable();
            $table->string('street')->nullable();
            $table->string('house')->nullable();
            $table->string('build')->nullable();
            $table->string('home')->nullable();
            $table->string('channel')->nullable();
            $table->string('contract')->nullable();
            $table->string('n_proxy')->nullable();
            $table->string('manager_id')->nullable();
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
        Schema::dropIfExists('cases');
    }
}
