<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('home_address')->nullable();
            $table->unsignedInteger('user_id')->nullable();

            $table->date('birth_date')->nullable();
            $table->integer('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('homephone_number')->nullable();
            $table->string('cellphone_number')->nullable();
            $table->string('nationality')->nullable();
            $table->string('occupation')->nullable();
            $table->string('religion')->nullable();

            $table->longText('chief_complaints')->nullable();
            $table->longText('history_of_illness')->nullable();

            /**
                * past history
            */
            $table->tinyInteger('rheumatic_hd')->unsigned()->default(0);
            $table->tinyInteger('myocardial_i')->unsigned()->default(0);
            $table->tinyInteger('cerebro_va')->unsigned()->default(0);
            $table->tinyInteger('asthma')->unsigned()->default(0);
            $table->tinyInteger('diabetes')->unsigned()->default(0);
            $table->tinyInteger('liver_d')->unsigned()->default(0);
            $table->tinyInteger('stomach_u')->unsigned()->default(0);
            $table->tinyInteger('kidney_d')->unsigned()->default(0);
            $table->tinyInteger('pregnancy')->unsigned()->default(0);
            $table->tinyInteger('tb')->unsigned()->default(0);
            $table->tinyInteger('hypertension')->unsigned()->default(0);
            $table->tinyInteger('hypotension')->unsigned()->default(0);
            $table->tinyInteger('allergy')->unsigned()->default(0);
            $table->string('allergy_specify')->nullable();
            $table->string('other_ill')->nullable();
            $table->string('medication_curr')->nullable();

            $table->tinyInteger('prev_extraction_no')->unsigned()->default(0);
            $table->tinyInteger('prev_extraction_yes')->unsigned()->default(0);
            $table->string('prev_extraction_when')->nullable();

            $table->tinyInteger('denture_upper')->unsigned()->default(0);
            $table->tinyInteger('denture_upper_none')->unsigned()->default(0);
            $table->string('denture_upper_type')->nullable();
            $table->string('denture_upper_since')->nullable();

            $table->tinyInteger('denture_lower')->unsigned()->default(0);
            $table->tinyInteger('denture_lower_none')->unsigned()->default(0);
            $table->string('denture_lower_type')->nullable();
            $table->string('denture_lower_since')->nullable();

            $table->tinyInteger('extraoral_head_normal')->unsigned()->default(0);
            $table->tinyInteger('extraoral_head_abnormal')->unsigned()->default(0);
            $table->string('extraoral_head_specify')->nullable();

            $table->tinyInteger('extraoral_tmj_normal')->unsigned()->default(0);
            $table->tinyInteger('extraoral_tmj_abnormal')->unsigned()->default(0);
            $table->string('extraoral_tmj_specify')->nullable();

            $table->tinyInteger('extraoral_eyes_normal')->unsigned()->default(0);
            $table->tinyInteger('extraoral_eyes_abnormal')->unsigned()->default(0);
            $table->string('extraoral_eyes_specify')->nullable();

            $table->string('blood_pressure')->nullable();
            $table->string('pulse_rate')->nullable();
            $table->string('respiratory_rate')->nullable();
            $table->string('temperature')->nullable();

            $table->tinyInteger('intraoral_lip_normal')->unsigned()->default(0);
            $table->tinyInteger('intraoral_lip_abnormal')->unsigned()->default(0);
            $table->string('intraoral_lip_specify')->nullable();

            $table->tinyInteger('intraoral_palate_normal')->unsigned()->default(0);
            $table->tinyInteger('intraoral_palate_abnormal')->unsigned()->default(0);
            $table->string('intraoral_palate_specify')->nullable();

            $table->tinyInteger('intraoral_floor_normal')->unsigned()->default(0);
            $table->tinyInteger('intraoral_floor_abnormal')->unsigned()->default(0);
            $table->string('intraoral_floor_specify')->nullable();

            $table->tinyInteger('intraoral_tongue_normal')->unsigned()->default(0);
            $table->tinyInteger('intraoral_tongue_abnormal')->unsigned()->default(0);
            $table->string('intraoral_tongue_specify')->nullable();

            $table->tinyInteger('intraoral_ging_normal')->unsigned()->default(0);
            $table->tinyInteger('intraoral_ging_abnormal')->unsigned()->default(0);
            $table->string('intraoral_ging_specify')->nullable();

            $table->tinyInteger('deposits_soft')->unsigned()->default(0);
            $table->tinyInteger('deposits_hard')->unsigned()->default(0);

            $table->tinyInteger('occ_c1')->unsigned()->default(0);
            $table->tinyInteger('occ_c2')->unsigned()->default(0);
            $table->tinyInteger('occ_c3')->unsigned()->default(0);

            $table->string('other_oral_ab_noted')->nullable();

            $table->string('tooth_no_1')->nullable();
            $table->string('tooth_no_2')->nullable();
            $table->string('tooth_no_3')->nullable();
            $table->string('tooth_no_4')->nullable();


            $table->string('mobility_1')->nullable();
            $table->string('mobility_2')->nullable();
            $table->string('mobility_3')->nullable();
            $table->string('mobility_4')->nullable();

            $table->string('palpatation_1')->nullable();
            $table->string('palpatation_2')->nullable();
            $table->string('palpatation_3')->nullable();
            $table->string('palpatation_4')->nullable();

            $table->string('percussion_1')->nullable();
            $table->string('percussion_2')->nullable();
            $table->string('percussion_3')->nullable();
            $table->string('percussion_4')->nullable();

            $table->string('test_cav_1')->nullable();
            $table->string('test_cav_2')->nullable();
            $table->string('test_cav_3')->nullable();
            $table->string('test_cav_4')->nullable();

            $table->string('hot_test_1')->nullable();
            $table->string('hot_test_2')->nullable();
            $table->string('hot_test_3')->nullable();
            $table->string('hot_test_4')->nullable();

            $table->string('cold_test_1')->nullable();
            $table->string('cold_test_2')->nullable();
            $table->string('cold_test_3')->nullable();
            $table->string('cold_test_4')->nullable();

            $table->string('anesthetic_1')->nullable();
            $table->string('anesthetic_2')->nullable();
            $table->string('anesthetic_3')->nullable();
            $table->string('anesthetic_4')->nullable();

            $table->string('electric_1')->nullable();
            $table->string('electric_2')->nullable();
            $table->string('electric_3')->nullable();
            $table->string('electric_4')->nullable();


            $table->longText('radio_interpret')->nullable();


            $table->string('tent_1')->nullable();
            $table->string('tent_2')->nullable();
            $table->string('tent_3')->nullable();
            $table->string('tent_4')->nullable();
            $table->string('tent_5')->nullable();
            $table->string('tent_6')->nullable();


            $table->string('examined_by')->nullable();
            $table->string('examimed_date')->nullable();
            $table->string('clinic_level')->nullable();

            $table->string('rec_treat_1')->nullable();
            $table->string('rec_treat_2')->nullable();
            $table->string('rec_treat_3')->nullable();
            $table->string('rec_treat_4')->nullable();
            $table->string('rec_treat_5')->nullable();
            $table->string('rec_treat_6')->nullable();
            
            $table->longText('ci_remarks')->nullable();

            $table->tinyInteger('active')->unsigned()->default(1);
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
        Schema::dropIfExists('patients');
    }
}
