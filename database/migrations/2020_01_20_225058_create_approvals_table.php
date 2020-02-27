<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvals', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->dateTime('apr_date')->nullable();
            $table->integer('apr_patient_id')->nullable();
            $table->string('apr_module')->nullable();
            $table->tinyInteger('apr_approved')->default(0)->nullable();
            $table->integer('apr_tooth_number')->default(0)->nullable();
            $table->string('apr_clinician')->nullable();
            $table->integer('apr_od_ci')->nullable();
            $table->integer('apr_od_ci_id')->nullable();
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
        Schema::dropIfExists('approvals');
    }
}
