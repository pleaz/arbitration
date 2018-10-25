<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id')->unsigned();
            $table->integer('organization_id')->unsigned();
            $table->integer('event_type_id')->unsigned();
            $table->integer('open')->unsigned();
            $table->string('comment')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();

            $table->foreign('case_id')->references('id')->on('cases')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('organization_id')->references('id')->on('organization')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('event_type_id')->references('id')->on('event_type')
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
        Schema::dropIfExists('event_type');
        Schema::dropIfExists('events');
    }
}
