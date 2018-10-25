<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obligation_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('obligation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kind');
            $table->string('arrears')->nullable();
            $table->string('fine')->nullable();
            $table->integer('obligation_type_id')->unsigned();
            $table->integer('case_id')->unsigned();
            $table->timestamps();

            $table->foreign('obligation_type_id')->references('id')->on('obligation_type')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('case_id')->references('id')->on('cases')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('loan_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('lender_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('loan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kind');
            $table->string('contract')->nullable();
            $table->string('arrears')->nullable();
            $table->string('debt')->nullable();
            $table->string('fine')->nullable();
            $table->string('account')->nullable();
            $table->integer('loan_type_id')->unsigned();
            $table->integer('lender_type_id')->unsigned();
            $table->integer('case_id')->unsigned();
            $table->timestamps();

            $table->foreign('loan_type_id')->references('id')->on('loan_type')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('lender_type_id')->references('id')->on('lender_type')
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
        Schema::dropIfExists('obligation');
        Schema::dropIfExists('obligation_type');

        Schema::dropIfExists('loan');
        Schema::dropIfExists('loan_type');
        Schema::dropIfExists('lender_type');
    }
}
