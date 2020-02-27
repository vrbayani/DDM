@extends('admin.layouts.admin')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <strong>Patient Name:</strong>
                <p class="p-view">{{ $patient->name }}</p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Home Address:</strong>
                    <input type="text" name="home_address" class="form-control" placeholder="Home Address" value="{{ $patient->home_address }}" disabled>
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>Birth Date:</strong>
                    <input type="date" name="birth_date" class="form-control" placeholder="" value="{{ $patient->birth_date }}">
                </div>
            </div>
            <div class="col-xs-2 col-sm-1 col-md-2">
                <div class="form-group">
                    <strong>Age:</strong>
                    <input type="number" name="age" class="form-control" placeholder="Age" value="{{ $patient->age }}">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>Sex:</strong>
                    <input type="text" name="sex" class="form-control" placeholder="Male/Female" value="{{ $patient->sex }}">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>Height:</strong>
                    <input type="text" name="height" class="form-control" placeholder="" value="{{ $patient->height }}">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>Weight:</strong>
                    <input type="text" name="weight" class="form-control" placeholder="" value="{{ $patient->weight }}">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>Civil Status:</strong>
                    <input type="text" name="civil_status" class="form-control" placeholder="Single/Married" value="{{ $patient->civil_status }}">
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Home Tel Number:</strong>
                    <input type="text" name="homephone_number" class="form-control" placeholder="000-0000" value="{{ $patient->homephone_number }}">
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Cell Phone Number:</strong>
                    <input type="text" name="cellphone_number" class="form-control" placeholder="0990-0000-000" value="{{ $patient->cellphone_number }}">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>Nationality:</strong>
                    <input type="text" name="nationality" class="form-control" placeholder="" value="{{ $patient->cellphone_number }}">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>Occupation:</strong>
                    <input type="text" name="occupation" class="form-control" placeholder="" value="{{ $patient->occupation }}">
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <strong>Religion:</strong>
                    <input type="text" name="religion" class="form-control" placeholder="" value="{{ $patient->religion }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>A. Chief Complaint/s:</strong>
                    <textarea class="form-control" style="height:100px" name="chief_complaints" placeholder="">{{ $patient->chief_complaints }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>B. History of present illness:</strong>
                    <textarea class="form-control" style="height:100px" name="history_of_illness" placeholder="">{{ $patient->history_of_illness }}</textarea>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>C. Past History: Check if any of conditions are present and leave blank if none.</strong><br/>
            <strong>Medical</strong>

        </div>


        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td width="25%">
                        <input type="checkbox" name="rheumatic_hd" class="switch-input" value="1" {{ old('rheumatic_hd') ? 'checked="checked"' : '' }} /> Rheumatic Heart Disease
                    </td>
                    <td width="25%">
                        <input type="checkbox" name="asthma" class="switch-input" value="1" {{ old('asthma') ? 'checked="checked"' : '' }} /> Asthma
                    </td>
                    <td width="25%">
                        <input type="checkbox" name="stomach_u" class="switch-input" value="1" {{ old('stomach_u') ? 'checked="checked"' : '' }}/> Stomach Ulcer
                    </td>
                    <td width="25%">
                        <input type="checkbox" name="tb" class="switch-input" value="1" {{ old('tb') ? 'checked="checked"' : '' }}/> T.B.
                    </td>
                </tr>

                <tr>
                    <td width="25%">
                        <input type="checkbox" name="myocardial_i" class="switch-input" value="1" {{ old('myocardial_i') ? 'checked="checked"' : '' }} /> Myocardial Infarct
                    </td>
                    <td width="25%">
                        <input type="checkbox" name="diabetes" class="switch-input" value="1" {{ old('diabetes') ? 'checked="checked"' : '' }} /> Diabetes
                    </td>
                    <td width="25%">
                        <input type="checkbox" name="kidney_d" class="switch-input" value="1" {{ old('kidney_d') ? 'checked="checked"' : '' }}/> Kidney Disease
                    </td>
                    <td width="25%">
                        <input type="checkbox" name="hypertension" class="switch-input" value="1" {{ old('hypertension') ? 'checked="checked"' : '' }}/> Hypertension
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <input type="checkbox" name="cerebro_va" class="switch-input" value="1" {{ old('cerebro_va') ? 'checked="checked"' : '' }} /> Cerebro-Vascular Accident
                    </td>
                    <td width="25%">
                        <input type="checkbox" name="liver_d" class="switch-input" value="1" {{ old('liver_d') ? 'checked="checked"' : '' }} /> Liver Disease
                    </td>
                    <td width="25%">
                        <input type="checkbox" name="pregnancy" class="switch-input" value="1" {{ old('pregnancy') ? 'checked="checked"' : '' }}/> Pregnancy
                    </td>
                    <td width="25%">
                        <input type="checkbox" name="hypotension" class="switch-input" value="1" {{ old('hypotension') ? 'checked="checked"' : '' }}/> Hypotension
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                        <input type="checkbox" name="allergy" class="switch-input" value="1" {{ old('allergy') ? 'checked="checked"' : '' }} /> Allergy
                    </td>
                    <td width="25%">
                        <input type="text" name="allergy_specify" class="form-control input-sm" placeholder="Specify" />
                    </td>
                    <td width="25%">
                        <input type="text" name="other_ill" class="form-control input-sm" placeholder="Other Illnesses" />
                    </td>
                    <td width="25%">
                        <input type="text" name="medication_curr" class="form-control input-sm" placeholder="Medications currently taking" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Dental</strong>
        </div>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td width="20%">
                        Previous Extraction: 
                    </td>
                    <td>
                        <input type="checkbox" name="prev_extraction_yes" class="switch-input" value="1"  /> 
                        Yes &ensp;
                        <input type="checkbox" name="prev_extraction_no" class="switch-input" value="1" /> 
                        No 
                    </td>

                    <td colspan="2" width="70%">
                        <div class="form-group">                            
                            <span class="col-xs-3 control-label">If Yes, When?</span>
                            <div class="col-xs-9">
                                <input type="text" name="prev_extraction_when" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="20%">
                        Denture: 
                    </td>
                    <td>
                        <input type="checkbox" name="denture_upper_none" class="switch-input" value="1" /> 
                        None &ensp;
                        <input type="checkbox" name="denture_upper" class="switch-input" value="1" /> 
                        Upper
                    </td>
                    <td>
                        <div class="form-group">     
                            <span class="col-xs-3 control-label">Type</span>
                            <div class="col-xs-9">
                                <input type="text" name="denture_upper_type" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">                            
                            <span class="col-xs-3 control-label">Since</span>
                            <div class="col-xs-9">
                                <input type="text" name="denture_upper_since" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="20%">
                    </td>
                    <td>
                        <input type="checkbox" name="denture_lower_none" class="switch-input" value="1" /> 
                        None &ensp;
                        <input type="checkbox" name="denture_lower" class="switch-input" value="1" /> 
                        Lower
                    </td>
                    <td width="25%">
                        <div class="form-group">                            
                            <span class="col-xs-3 control-label">Type</span>
                            <div class="col-xs-9">
                                <input type="text" name="denture_lower_type" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                    <td width="25%">
                        <div class="form-group">                            
                            <span class="col-xs-3 control-label">Since</span>
                            <div class="col-xs-9">
                                <input type="text" name="denture_lower_since" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group text-center">
            <strong>Clinical Examination</strong>
        </div>
        <div class="form-group">
            <strong>A. Extraoral</strong>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <td width="10%">
                        Head:
                    </td>
                    <td width="20%">
                        <input type="checkbox" name="extraoral_head_normal" class="switch-input" value="1" /> 
                        Normal &ensp;
                        <input type="checkbox" name="extraoral_head_abnormal" class="switch-input" value="1" /> 
                        Abnormal, Specify
                    </td>
                    <td>
                        <div class="form-group">    
                            <div class="col-md-12">
                                <input type="text" name="extraoral_head_specify" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                    <td width="10%">
                        Eyes:
                    </td>
                    <td width="20%">
                        <input type="checkbox" name="extraoral_eyes_normal" class="switch-input" value="1" /> 
                        Normal &ensp;
                        <input type="checkbox" name="extraoral_eyes_abnormal" class="switch-input" value="1" /> 
                        Abnormal, Specify
                    </td>
                    <td>
                        <div class="form-group">    
                            <div class="col-md-12">
                                <input type="text" name="extraoral_eyes_specify" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td width="10%">
                        TMJ:
                    </td>
                    <td width="20%">
                        <input type="checkbox" name="extraoral_tmj_normal" class="switch-input" value="1" /> 
                        Normal &ensp;
                        <input type="checkbox" name="extraoral_tmj_abnormal" class="switch-input" value="1" /> 
                        Abnormal, Specify
                    </td>
                    <td>
                        <div class="form-group">    
                            <div class="col-md-12">
                                <input type="text" name="extraoral_tmj_specify" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td width="10%">
                        Vital Signs: &ensp;
                    </td>
                    <td width="20%">
                        <div class="form-group">    
                            <div class="col-md-12">
                                Blood Pressure
                                <input type="text" name="blood_pressure" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                    <td width="20%">
                        <div class="form-group">    
                            <div class="col-md-12">
                                Pulse Rate
                                <input type="text" name="pulse_rate" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                    <td width="20%">
                        <div class="form-group">    
                            <div class="col-md-12">
                                Respiratory Rate
                                <input type="text" name="respiratory_rate" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                    <td width="20%">
                        <div class="form-group">    
                            <div class="col-md-12">
                                Temperature
                                <input type="text" name="temperature" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>B. Intraoral</strong>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <td width="10%">
                        Lip:
                    </td>
                    <td width="20%">
                        <input type="checkbox" name="intraoral_lip_normal" class="switch-input" value="1" /> 
                        Normal &ensp;
                        <input type="checkbox" name="intraoral_lip_abnormal" class="switch-input" value="1" /> 
                        Abnormal, Specify
                    </td>
                    <td>
                        <div class="form-group">    
                            <div class="col-md-12">
                                <input type="text" name="intraoral_lip_specify" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                    <td width="10%">
                        Palate:
                    </td>
                    <td width="20%">
                        <input type="checkbox" name="intraoral_palate_normal" class="switch-input" value="1" /> 
                        Normal &ensp;
                        <input type="checkbox" name="intraoral_palate_abnormal" class="switch-input" value="1" /> 
                        Abnormal, Specify
                    </td>
                    <td>
                        <div class="form-group">    
                            <div class="col-md-12">
                                <input type="text" name="intraoral_palate_specify" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td width="10%">
                        Floor of the mouth:
                    </td>
                    <td width="20%">
                        <input type="checkbox" name="intraoral_floor_normal" class="switch-input" value="1" /> 
                        Normal &ensp;
                        <input type="checkbox" name="intraoral_floor_abnormal" class="switch-input" value="1" /> 
                        Abnormal, Specify
                    </td>
                    <td>
                        <div class="form-group">    
                            <div class="col-md-12">
                                <input type="text" name="intraoral_floor_specify" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                    <td width="10%">
                        Tongue:
                    </td>
                    <td width="20%">
                        <input type="checkbox" name="intraoral_tongue_normal" class="switch-input" value="1" /> 
                        Normal &ensp;
                        <input type="checkbox" name="intraoral_tongue_abnormal" class="switch-input" value="1" /> 
                        Abnormal, Specify
                    </td>
                    <td>
                        <div class="form-group">    
                            <div class="col-md-12">
                                <input type="text" name="intraoral_tongue_specify" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="10%">
                        Gingiva:
                    </td>
                    <td width="20%">
                        <input type="checkbox" name="intraoral_ging_normal" class="switch-input" value="1" /> 
                        Normal &ensp;
                        <input type="checkbox" name="intraoral_ging_abnormal" class="switch-input" value="1" /> 
                        Abnormal, Specify
                    </td>
                    <td>
                        <div class="form-group">    
                            <div class="col-md-12">
                                <input type="text" name="intraoral_ging_specify" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                    <td width="10%">
                        Deposits:
                    </td>
                    <td width="20%">
                        <input type="checkbox" name="deposits_soft" class="switch-input" value="1" /> 
                        Soft &ensp;
                        <input type="checkbox" name="deposits_hard" class="switch-input" value="1" /> 
                        Hard
                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td width="10%">
                        Occlusion:
                    </td>
                    <td width="20%">
                        <input type="checkbox" name="occ_c1" class="switch-input" value="1" /> 
                        Class 1 &ensp;
                        <input type="checkbox" name="occ_c2" class="switch-input" value="1" /> 
                        Class 2 &ensp;
                        <input type="checkbox" name="occ_c3" class="switch-input" value="1" /> 
                        Class 3 &ensp;
                    </td>

                    <td width="20%">
                        Other Oral abnormalities Noted:
                    </td>
                    <td colspan="3">
                        <div class="form-group">    
                            <div class="col-md-12">
                                <input type="text" name="other_oral_ab_noted" class="form-control input-sm" placeholder="" />
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="form-group">
        <strong>C. Mouth Examination</strong>
    </div> 
    <div class="container">
        <div class="row justify-content-center">
            <table class="table text-center table-fit borderless">
                <tbody>
                    <tr class="tooth-code">
                        <td colspan="2" style="vertical-align: bottom;padding-bottom: 0;">
                            <p style="margin-bottom: 0px;">TEMPORARY<br/>TEETH</p>
                        </td>
                        <td>
                            <p style="margin-top: 10px;">STATUS<br/>RIGHT</p>
                        </td>
                        @foreach($teeth as $tooth => $v)
                        @if($tooth < 10)
                        <td class="{{ $tooth == 4 ? 'br-5' : '' }}">
                            <input type="text" name="code_1[{{$tooth}}]" class="form-control input-sm" value="{{ $v->code_1 }}" />
                            <input type="text" name="code_2[{{$tooth}}]" class="form-control input-sm" value="{{ $v->code_2 }}" />
                            <p>{{ $tooth <= 4 ? number_format(55 - $tooth) : number_format(56 + $tooth)}}</p>
                            <div class="wrapper">
                                <div class="quarter left-top" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_1 }} !important;">
                                    <input type="hidden" name="tooth_1[{{ $tooth }}]" value="{{ $v->tooth_1 }}">
                                </div>

                                <div class="quarter right-top" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_2 }} !important;">
                                    <input type="hidden" name="tooth_2[{{ $tooth }}]" value="{{ $v->tooth_2 }}">
                                </div>

                                <div class="quarter left-bottom" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_3 }} !important;">
                                    <input type="hidden" name="tooth_3[{{ $tooth }}]" value="{{ $v->tooth_3 }}">
                                </div>

                                <div class="quarter right-bottom" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_4 }} !important;">
                                    <input type="hidden" name="tooth_4[{{ $tooth }}]" value="{{ $v->tooth_4 }}">
                                </div>

                                <div class="quarter center" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_5 }} !important;">
                                    <input type="hidden" name="tooth_5[{{ $tooth }}]" value="{{ $v->tooth_5 }}">
                                </div>
                            </div>
                        </td>
                        @endif
                        @endforeach
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr class="tooth-code">
                     @foreach($teeth as $tooth => $v)
                     @if($tooth >= 10 && $tooth < 26)
                     <td class="{{ $tooth == 17 ? 'br-5' : '' }}">
                        <input type="text" name="code_1[{{ $tooth }}]" class="form-control input-sm" value="{{ $v->code_1 }}"/>
                        <input type="text" name="code_2[{{ $tooth }}]" class="form-control input-sm" value="{{ $v->code_2 }}"/>
                        <p>{{ $tooth <= 7 ? number_format(18 - $tooth) : number_format(13 + $tooth)}}</p>
                        <div class="wrapper">
                            <div class="quarter left-top" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_1 }} !important;">
                                <input type="hidden" name="tooth_1[{{ $tooth }}]" value="{{ $v->tooth_1 }}">
                            </div>

                            <div class="quarter right-top" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_2 }} !important;">
                                <input type="hidden" name="tooth_2[{{ $tooth }}]" value="{{ $v->tooth_2 }}">
                            </div>

                            <div class="quarter left-bottom" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_3 }} !important;">
                                <input type="hidden" name="tooth_3[{{ $tooth }}]" value="{{ $v->tooth_3 }}">
                            </div>

                            <div class="quarter right-bottom" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_4 }} !important;">
                                <input type="hidden" name="tooth_4[{{ $tooth }}]" value="{{ $v->tooth_4 }}">
                            </div>

                            <div class="quarter center" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_5 }} !important;">
                                <input type="hidden" name="tooth_5[{{ $tooth }}]" value="{{ $v->tooth_5 }}">
                            </div>
                        </div>
                    </td>
                    @endif
                    @endforeach
                </tr>
                <tr class="tooth-code bt-5">
                    @foreach($teeth as $tooth => $v)
                    @if($tooth >= 26 && $tooth < 42)
                    <td class="pt-20 {{ $tooth == 33 ? 'br-5' : '' }}">
                        <div class="wrapper">
                            <div class="quarter left-top" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_1 }} !important;">
                                <input type="hidden" name="tooth_1[{{ $tooth }}]" value="{{ $v->tooth_1 }}">
                            </div>

                            <div class="quarter right-top" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_2 }} !important;">
                                <input type="hidden" name="tooth_2[{{ $tooth }}]" value="{{ $v->tooth_2 }}">
                            </div>

                            <div class="quarter left-bottom" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_3 }} !important;">
                                <input type="hidden" name="tooth_3[{{ $tooth }}]" value="{{ $v->tooth_3 }}">
                            </div>

                            <div class="quarter right-bottom" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_4 }} !important;">
                                <input type="hidden" name="tooth_4[{{ $tooth }}]" value="{{ $v->tooth_4 }}">
                            </div>

                            <div class="quarter center" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_5 }} !important;">
                                <input type="hidden" name="tooth_5[{{ $tooth }}]" value="{{ $v->tooth_5 }}">
                            </div>
                        </div>
                        <p>{{ $tooth <= 33 ? number_format(74 - $tooth) : number_format($tooth - 3 )}}</p>
                        <input type="text" name="code_1[{{ $tooth }}]" class="form-control input-sm" value="{{ $v->code_1 }}"/>
                        <input type="text" name="code_2[{{ $tooth }}]" class="form-control input-sm" value="{{ $v->code_2 }}"/>
                    </td>
                    @endif
                    @endforeach
                </tr>
                <tr class="tooth-code">
                    <td colspan="2" style="padding-top: 0px;">
                        <p style="margin-bottom: 0px;">TEMPORARY<br/>TEETH</p>
                    </td>
                    <td style="vertical-align: bottom;">
                        <p style="margin-top: 10px;">STATUS<br/>RIGHT</p>
                    </td>

                    @foreach($teeth as $tooth => $v)
                    @if($tooth >= 42 && $tooth < 52)
                    <td class="{{ $tooth == 46 ? 'br-5' : '' }}">
                        <div class="wrapper">
                            <div class="quarter left-top" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_1 }} !important;">
                                <input type="hidden" name="tooth_1[{{ $tooth }}]" value="{{ $v->tooth_1 }}">
                            </div>

                            <div class="quarter right-top" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_2 }} !important;">
                                <input type="hidden" name="tooth_2[{{ $tooth }}]" value="{{ $v->tooth_2 }}">
                            </div>

                            <div class="quarter left-bottom" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_3 }} !important;">
                                <input type="hidden" name="tooth_3[{{ $tooth }}]" value="{{ $v->tooth_3 }}">
                            </div>

                            <div class="quarter right-bottom" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_4 }} !important;">
                                <input type="hidden" name="tooth_4[{{ $tooth }}]" value="{{ $v->tooth_4 }}">
                            </div>

                            <div class="quarter center" style="-webkit-print-color-adjust: exact; background-color:{{ $v->tooth_5 }} !important;">
                                <input type="hidden" name="tooth_5[{{ $tooth }}]" value="{{ $v->tooth_5 }}">
                            </div>
                        </div>
                        <p>{{ $tooth <= 46 ? number_format(127 - $tooth) : number_format(24 + $tooth)}}</p>
                        <input type="text" name="code_1[{{ $tooth }}]" class="form-control input-sm" value="{{ $v->code_1 }}"/>
                        <input type="text" name="code_2[{{ $tooth }}]" class="form-control input-sm" value="{{ $v->code_2 }}"/>
                    </td>
                    @endif
                    @endforeach
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
            </tbody>
        </table>
    </div>
</div>



<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>D. Diagnostic Test:</strong>
    </div>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Tooth No.</th>
            <th>Mobility</th>
            <th>Palpatation</th>
            <th>Percussion</th>
            <th>Test Cavity</th>
            <th>Hot Test (Duration)</th>
            <th>Cold Test (Duration)</th>
            <th>Anesthetic Test</th>
            <th>Electric Pulp Test</th>
        </tr>
    </thead>
    <tbody>
       @for ($i = 1; $i < 4; $i++)    
       <tr>
        <td>
            <input type="text" name="tooth_no_{{$i}}" class="form-control input-sm" placeholder="" />
        </td>
        <td>
            <input type="text" name="mobility_{{$i}}" class="form-control input-sm" placeholder="" />
        </td>
        <td>
            <input type="text" name="palpatation_{{$i}}" class="form-control input-sm" placeholder="" />
        </td>
        <td>
            <input type="text" name="percussion_{{$i}}" class="form-control input-sm" placeholder="" />
        </td>
        <td>
            <input type="text" name="test_cav_{{$i}}" class="form-control input-sm" placeholder="" />
        </td>
        <td>
            <input type="text" name="hot_test_{{$i}}" class="form-control input-sm" placeholder="" />
        </td>
        <td>
            <input type="text" name="cold_test_{{$i}}" class="form-control input-sm" placeholder="" />
        </td>
        <td>
            <input type="text" name="anesthetic_1" class="form-control input-sm" placeholder="" />
        </td>
        <td>
            <input type="text" name="electric_1" class="form-control input-sm" placeholder="" />
        </td>
    </tr>
    @endfor
</tbody>
</table>
<div class="form-group">
    <strong> Radiographic Interpretation:</strong>
    <textarea class="form-control" style="height:100px" name="radio_interpret" placeholder=""></textarea>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group text-center">
        <strong class="text-center"><h4>Tentative Diagnosis</h4></strong>
    </div>

    <table class='table borderless'>
        <tr>
            <td style="width:1%;">1.</td>
            <td style="width: 49%;padding-right: 50px;">
                <input type="text" name="tent_1" class="form-control input-sm" placeholder="" />
            </td>

            <td style="width:1%;">2.</td>
            <td style="width:width: 49%;">
                <input type="text" name="tent_2" class="form-control input-sm" placeholder="" />
            </td>
        </tr>
        <tr>
            <td style="width:1%;">3.</td>
            <td style="width: 49%;padding-right: 50px;">
                <input type="text" name="tent_3" class="form-control input-sm" placeholder="" />
            </td>

            <td style="width:1%;">4.</td>
            <td style="width: 49%;">
                <input type="text" name="tent_4" class="form-control input-sm" placeholder="" />
            </td>
        </tr>
        <tr>
            <td style="width:1%;">5.</td>
            <td style="width: 49%;padding-right: 50px;">
                <input type="text" name="tent_5" class="form-control input-sm" placeholder="" />
            </td>

            <td style="width:1%;">6.</td>
            <td style="width: 49%;">
                <input type="text" name="tent_6" class="form-control input-sm" placeholder="" />
            </td>
        </tr>
    </table>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="col-sm-3">Examined by:</label>
        <div class="col-sm-9">
            <input class="form-control" name="examined_by" type="text" value="">
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="col-sm-2 control-label">Date:</label>
        <div class="col-sm-10">
            <input class="form-control" name="examimed_date" type="text" value="">
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="col-sm-2">Clinic Level:</label>
        <div class="col-sm-10">
            <input class="form-control" name="clinic_level" type="text" value="">
        </div>
    </div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group text-center">
        <strong class="text-center"><h4>Recommended Treatment Plan</h4></strong>
    </div>

    <table class='table borderless'>
        <tr>
            <td style="width:1%;">1.</td>
            <td style="width: 49%;padding-right: 50px;">
                <input type="text" name="rec_treat_1" class="form-control input-sm" placeholder="" />
            </td>

            <td style="width:1%;">2.</td>
            <td style="width:width: 49%;">
                <input type="text" name="rec_treat_2" class="form-control input-sm" placeholder="" />
            </td>
        </tr>
        <tr>
            <td style="width:1%;">3.</td>
            <td style="width: 49%;padding-right: 50px;">
                <input type="text" name="rec_treat_3" class="form-control input-sm" placeholder="" />
            </td>

            <td style="width:1%;">4.</td>
            <td style="width: 49%;">
                <input type="text" name="rec_treat_4" class="form-control input-sm" placeholder="" />
            </td>
        </tr>
        <tr>
            <td style="width:1%;">5.</td>
            <td style="width: 49%;padding-right: 50px;">
                <input type="text" name="rec_treat_5" class="form-control input-sm" placeholder="" />
            </td>

            <td style="width:1%;">6.</td>
            <td style="width: 49%;">
                <input type="text" name="rec_treat_6" class="form-control input-sm" placeholder="" />
            </td>
        </tr>
    </table>
</div>


</div>
</div>
</div>
@endsection

@section('styles')
@parent
{{ Html::style(mix('assets/admin/css/users/edit.css')) }}

<style>

div.wrapper { position: relative; width: 45px; height: 45px; border-radius: 50px;-ms-transform: rotate(45deg);-webkit-transform: rotate(45deg); transform: rotate(45deg); display: inline-block !important;}
div.quarter { position: absolute; width: 20px; height: 20px;}

div.quarter.left-top { -webkit-print-color-adjust: exact; left: 0; top: 0; border-top-left-radius: 50px;border: solid 1px #333; background-color: #fff;}
div.quarter.center {-webkit-print-color-adjust: exact; left: 10px; top: 10px;border-radius: 50%;border: solid 1px #333; background-color: #fff;}
div.quarter.right-top {-webkit-print-color-adjust: exact; left: 20px; top: 0; border-top-right-radius: 50px;border: solid 1px #333; background-color: #fff;}
div.quarter.left-bottom {-webkit-print-color-adjust: exact; left: 0; top: 20px; border-bottom-left-radius: 50px;border: solid 1px #333; background-color: #fff;}
div.quarter.right-bottom { left: 20px; top: 20px; border-bottom-right-radius: 50px; border: solid 1px #333; background-color: #fff;}
.borderless tr td { border-top: none !important; }
.table-fit { width: 1px; margin: 0 auto;}
.tooth-code td input{ width: 45px; padding: 0 5px; text-align: center; margin: 0 auto;}
.d-fields { font-size: 17px; margin: 5px; color: #000000; }


@media print {
 body {
  -webkit-print-color-adjust: exact;
}
}


</style>

@endsection

@section('scripts')
@parent
{{ Html::script(mix('assets/admin/js/users/edit.js')) }}
@endsection