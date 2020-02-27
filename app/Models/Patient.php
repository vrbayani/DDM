<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

	
	protected $fillable =
	[                                                  
		'name',  'home_address', 'patient_number', 'user_id', 'birth_date',
		'age', 'sex', 'height', 'weight', 'civil_status', 'homephone_number',
		'cellphone_number', 'nationality', 'occupation', 'religion',
		'chief_complaints', 'history_of_illness', 'rheumatic_hd', 'myocardial_i',
		'cerebro_va', 'asthma', 'diabetes', 'liver_d', 'stomach_u', 'kidney_d',
		'pregnancy', 'tb', 'hypertension', 'hypotension', 'allergy', 'allergy_specify',
		'other_ill', 'medication_curr', 'prev_extraction_no', 'prev_extraction_yes',
		'prev_extraction_when',	'denture_upper', 'denture_upper_none', 'denture_upper_type', 'denture_upper_since',
		'denture_lower', 'denture_lower_none', 'denture_lower_type', 'denture_lower_since',
		'extraoral_head_normal', 'extraoral_head_abnormal', 'extraoral_head_specify',
		'extraoral_tmj_normal', 'extraoral_tmj_abnormal', 'extraoral_tmj_specify',
		'extraoral_eyes_normal', 'extraoral_eyes_abnormal', 'extraoral_eyes_specify',
		'blood_pressure', 'pulse_rate', 'respiratory_rate', 'temperature',
		'intraoral_lip_normal', 'intraoral_lip_abnormal', 'intraoral_lip_specify',
		'intraoral_palate_normal', 'intraoral_palate_abnormal', 'intraoral_palate_specify',
		'intraoral_floor_normal', 'intraoral_floor_abnormal', 'intraoral_floor_specify',
		'intraoral_tongue_normal', 'intraoral_tongue_abnormal','intraoral_tongue_specify',
		'intraoral_ging_normal', 'intraoral_ging_abnormal', 'intraoral_ging_specify',
		'deposits_soft', 'deposits_hard', 'occ_c1', 'occ_c2', 'occ_c3', 'other_oral_ab_noted',
		'tooth_no_1', 'tooth_no_2', 'tooth_no_3', 'tooth_no_4',
		'mobility_1', 'mobility_2', 'mobility_3', 'mobility_4',
		'palpatation_1', 'palpatation_2', 'palpatation_3', 'palpatation_4',
		'percussion_1', 'percussion_2', 'percussion_3', 'percussion_4',
		'test_cav_1', 'test_cav_2', 'test_cav_3', 'test_cav_4',
		'hot_test_1', 'hot_test_2', 'hot_test_3', 'hot_test_4',
		'cold_test_1', 'cold_test_2', 'cold_test_3', 'cold_test_4',
		'anesthetic_1', 'anesthetic_2', 'anesthetic_3', 'anesthetic_4',
		'electric_1', 'electric_2', 'electric_3', 'electric_4', 'radio_interpret',
		'tent_1', 'tent_2', 'tent_3', 'tent_4', 'tent_5', 'tent_6',
		'examined_by', 'examimed_date', 'clinic_level',
		'rec_treat_1', 'rec_treat_2', 'rec_treat_3', 'rec_treat_4', 'rec_treat_5', 'rec_treat_6', 
		'ci_remarks',

	];


	public function tooth()
	{
		return $this->hasOne('App\Models\Tooth', 'patient_id');
	}

	public function approval()
	{
		return $this->hasOne('App\Models\Approval', 'apr_patient_id');
	}

}
