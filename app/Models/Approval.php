<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
	protected $fillable = [
		'apr_date', 'apr_patient_id', 'apr_module', 'apr_approved', 'apr_tooth_number', 'apr_od_ci', 'apr_od_ci_id', 'apr_clinician',
	];



	public function user()
	{
		return $this->belongsTo('App\Models\Auth\User\User', 'apr_od_ci_id');
	}

	public function patient()
	{
		return $this->belongsTo('App\Models\Patient', 'apr_patient_id');
	}
	
}
