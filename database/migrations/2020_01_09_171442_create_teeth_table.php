<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeethTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teeth', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->string('tooth_1')->default('white')->nullable();
            $table->string('tooth_2')->default('white')->nullable();
            $table->string('tooth_3')->default('white')->nullable();
            $table->string('tooth_4')->default('white')->nullable();
            $table->string('tooth_5')->default('white')->nullable();
            $table->string('code_1')->nullable();
            $table->string('code_2')->nullable();


            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teeth');
    }
}
