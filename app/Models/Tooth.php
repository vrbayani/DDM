<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tooth extends Model
{
    
	protected $primaryKey = 'patient_id';

    protected $fillable =   [
                            'patient_id', 'tooth_1', 'tooth_2', 'tooth_3', 'tooth_4', 'tooth_5',
                            'code_1', 'code_2',
                            ];


    public function patient()
    {
    	return $this->belongsTo('App\Models\Patient', 'patient_id');
    }

    public function approval()
    {
    	return $this->hasMany('App\Models\Approval', 'approval_id');
    }

}
