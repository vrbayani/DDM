@extends('admin.layouts.admin')

@section('title','Add Patient')

@section('content')


@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        {{ Form::open(['route'=>['admin.patients.store'],'method' => 'post','class'=>'form-horizontal form-label-left', 'style' => 'margin-bottom:50px;']) }}


        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Patient Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Home Address:</strong>
                <input type="text" name="home_address" class="form-control" placeholder="Home Address" value="{{ old('home_address') }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Birth Date:</strong>
                <input type="date" name="birth_date" class="form-control datetimepicker" placeholder="" value="{{ old('birth_date') }}">
            </div>
        </div>

        <div class="col-xs-6 col-sm-1 col-md-1">
            <div class="form-group">
                <strong>Age:</strong>
                <input type="number" name="age" class="form-control" placeholder="Age" value="{{ old('age') }}">
            </div>
        </div>

        <div class="col-xs-6 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Sex:</strong>
                <input type="text" name="sex" class="form-control" placeholder="Male/Female" value="{{ old('sex') }}">
            </div>
        </div>

        <div class="col-xs-6 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Height:</strong>
                <input type="text" name="height" class="form-control" placeholder="" value="{{ old('height') }}">
            </div>
        </div>

        <div class="col-xs-6 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Weight:</strong>
                <input type="text" name="weight" class="form-control" placeholder="" value="{{ old('weight') }}">
            </div>
        </div>
        <div class="col-xs-6 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Civil Status:</strong>
                <input type="text" name="civil_status" class="form-control" placeholder="Single/Married" value="{{ old('civil_status') }}">
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Home Tel Number:</strong>
                <input type="text" name="homephone_number" class="form-control" placeholder="000-0000" value="{{ old('homephone_number') }}">
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Cell Phone Number:</strong>
                <input type="text" name="cellphone_number" class="form-control" placeholder="0990-0000-000" value="{{ old('cellphone_number') }}">
            </div>
        </div>
        <div class="col-xs-6 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Nationality:</strong>
                <input type="text" name="nationality" class="form-control" placeholder="" value="{{ old('nationality') }}">
            </div>
        </div>
        <div class="col-xs-6 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Occupation:</strong>
                <input type="text" name="occupation" class="form-control" placeholder="" value="{{ old('occupation') }}">
            </div>
        </div>
        <div class="col-xs-6 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Religion:</strong>
                <input type="text" name="religion" class="form-control" placeholder="" value="{{ old('religion') }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>A. Chief Complaint/s:</strong>
                <textarea class="form-control" style="height:100px" name="chief_complaints" placeholder="">{{ old('chief_complaints') }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>B. History of present illness:</strong>
                <textarea class="form-control" style="height:100px" name="history_of_illness" placeholder="">{{ old('history_of_illness') }}</textarea>
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
                                Blood Pressure  
                                <div class="col-md-10 input-group">
                                    <input type="text" name="blood_pressure" class="form-control input-sm" placeholder="" />
                                    <span class="input-group-addon">mm/Hg</span>
                                </div>
                            </div>
                        </td>
                        <td width="20%">
                            <div class="form-group"> 
                                Pulse Rate   
                                <div class="col-md-10 input-group">
                                    <input type="text" name="pulse_rate" class="form-control input-sm" placeholder="" />
                                    <span class="input-group-addon">bpm</span>
                                </div>
                            </div>
                        </td>
                        <td width="20%">
                            <div class="form-group">
                                Respiratory Rate    
                                <div class="col-md-10 input-group">
                                    <input type="text" name="respiratory_rate" class="form-control input-sm" placeholder="" />
                                    <span class="input-group-addon">rpm</span>
                                </div>
                            </div>
                        </td>
                        <td width="20%">
                            <div class="form-group">    
                                Temperature
                                <div class="col-md-10 input-group">
                                    <input type="text" name="temperature" class="form-control input-sm" placeholder="" />
                                    <span class="input-group-addon">&deg;C</span>
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
                            @for($i = 0; $i < 10; $i++)
                            <td class="{{ $i == 4 ? 'br-5' : '' }}">
                                <input type="text" name="code_1[{{$i}}]" class="form-control input-sm" />
                                <p>{{ $i <= 4 ? number_format(55 - $i) : number_format(56 + $i)}}</p>
                                <div class="wrapper">
                                    <div class="quarter left-top">
                                        <input type="hidden" name="tooth_1[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter right-top">
                                        <input type="hidden" name="tooth_2[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter left-bottom">
                                        <input type="hidden" name="tooth_3[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter right-bottom">
                                        <input type="hidden" name="tooth_4[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter center">
                                        <input type="hidden" name="tooth_5[{{$i}}]" value="">
                                    </div>
                                </div>
                            </td>
                            @endfor
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr class="tooth-code">
                            @for($i = 10; $i < 26; $i++)
                            <td class="{{ $i == 17 ? 'br-5' : '' }}">
                                <input type="text" name="code_1[{{$i}}]" class="form-control input-sm" />
                                <p>{{ $i <= 17 ? number_format(28 - $i) : number_format(3 + $i)}}</p>
                                <div class="wrapper">
                                    <div class="quarter left-top">
                                        <input type="hidden" name="tooth_1[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter right-top">
                                        <input type="hidden" name="tooth_2[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter left-bottom">
                                        <input type="hidden" name="tooth_3[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter right-bottom">
                                        <input type="hidden" name="tooth_4[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter center">
                                        <input type="hidden" name="tooth_5[{{$i}}]" value="">
                                    </div>
                                </div>
                            </td>
                            @endfor
                        </tr>
                        <tr class="tooth-code bt-5">
                            @for ($i = 26; $i < 42; $i++)
                            <td class="pt-20 {{ $i == 33 ? 'br-5' : '' }}">
                                <div class="wrapper">
                                    <div class="quarter left-top">
                                        <input type="hidden" name="tooth_1[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter right-top">
                                        <input type="hidden" name="tooth_2[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter left-bottom">
                                        <input type="hidden" name="tooth_3[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter right-bottom">
                                        <input type="hidden" name="tooth_4[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter center">
                                        <input type="hidden" name="tooth_5[{{$i}}]" value="">
                                    </div>
                                </div>
                                <p>{{ $i <= 33 ? number_format(74 - $i) : number_format($i - 3 )}}</p>
                                <input type="text" name="code_1[{{$i}}]" class="form-control input-sm" />
                            </td>
                            @endfor
                        </tr>
                        <tr class="tooth-code">
                            <td colspan="2" style="padding-top: 0px;">
                                <p style="margin-bottom: 0px;">TEMPORARY<br/>TEETH</p>
                            </td>
                            <td style="vertical-align: bottom;">
                                <p style="margin-top: 10px;">STATUS<br/>RIGHT</p>
                            </td>

                            @for($i = 42; $i < 52; $i++)
                            <td class="{{ $i == 46 ? 'br-5' : '' }}">
                                <div class="wrapper">
                                    <div class="quarter left-top">
                                        <input type="hidden" name="tooth_1[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter right-top">
                                        <input type="hidden" name="tooth_2[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter left-bottom">
                                        <input type="hidden" name="tooth_3[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter right-bottom">
                                        <input type="hidden" name="tooth_4[{{$i}}]" value="">
                                    </div>

                                    <div class="quarter center">
                                        <input type="hidden" name="tooth_5[{{$i}}]" value="">
                                    </div>
                                </div>
                                <p>{{ $i <= 46 ? number_format(127 - $i) : number_format(24 + $i)}}</p>
                                <input type="text" name="code_1[{{$i}}]" class="form-control input-sm" />
                            </td>
                            @endfor
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
                    <input type="text" name="anesthetic_{{$i}}" class="form-control input-sm" placeholder="" />
                </td>
                <td>
                    <input type="text" name="electric_{{$i}}" class="form-control input-sm" placeholder="" />
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
            <input id="examined" type="hidden" name="examimed_by" class="form-control input-sm" placeholder="" value=""/>
            <p>{{ auth()->user()->name }}</p>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="col-sm-2 control-label">Date:</label>
        <div class="col-sm-10">
            <input class="form-control" name="examimed_date" type="date" value="">
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




<div class="col-xs-12 col-sm-12 col-md-12">
    <table class='table table-bordered apr-table'>
        <tr class="approval-header">
            <th width="15%">Date</th>
            <th width="30%">Cases</th>
            <th width="15%">Tooth No.</th>
            <th width="30%">O.D. C.I.</th>
            <th width="10%">Action</th>
        </tr>
        <tr>
            
            <input type="hidden" name="apr_clinician" value="{{ auth()->user()->id }}">
            <td><input type="date" name="apr_date[]" class="form-control" placeholder="" value="{{ old('apr_date[]') }}" required/></td>
            <td><input type="text" name="apr_module[]" class="form-control" placeholder="" required/></td>
            <td><input type="text" name="apr_tooth_number[]" class="form-control" placeholder="" required/></td>
            <td><select data-apr="" name="apr_od_ci[]" class="clinician_instructor form-control" required/></select></td>
            
            <td align="center"><p><a href="javascript:void(0);" class="btn btn-info add_apr" title="Add field"><i class="fa fa-plus-circle" aria-hidden="true"></i>&ensp;Add Row</a></p></td>
        </tr>
    </table>

    <div class="form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <button type="submit" class="btn btn-success pull-right">Save</button>
            <a class="btn btn-primary pull-right" href="{{ URL::previous() }}">Cancel</a>
        </div>
    </div>

    {{ Form::close() }}

</div>
</div>

@endsection

@section('styles')
@parent
{{ Html::style(mix('assets/admin/css/users/edit.css')) }}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<style>

div.wrapper { position: relative; width: 45px; height: 45px; border-radius: 50px;-ms-transform: rotate(45deg);-webkit-transform: rotate(45deg); transform: rotate(45deg); display: inline-block !important;}
div.quarter { position: absolute; width: 20px; height: 20px;}

div.quarter.left-top { left: 0; top: 0; border-top-left-radius: 50px;border: solid 1px #333; background-color: #fff;}
div.quarter.center {left: 10px; top: 10px;border-radius: 50%;border: solid 1px #333; background-color: #fff;}
div.quarter.right-top { left: 20px; top: 0; border-top-right-radius: 50px;border: solid 1px #333; background-color: #fff;}
div.quarter.left-bottom { left: 0; top: 20px; border-bottom-left-radius: 50px;border: solid 1px #333; background-color: #fff;}
div.quarter.right-bottom { left: 20px; top: 20px; border-bottom-right-radius: 50px; border: solid 1px #333; background-color: #fff;}

div.quarter.right-bottom:hover { cursor:pointer;background-color: #000; }
div.quarter.left-bottom:hover { cursor:pointer;background-color: #000; }
div.quarter.right-top:hover { cursor:pointer;background-color: #000; }
div.quarter.left-top:hover { cursor:pointer;background-color: #000; }
div.quarter.center:hover { cursor:pointer;background-color: #000; }
.borderless tr td { border-top: none !important; }
.table-fit { width: 1px; margin: 50px auto;}
.tooth-code td input{ width: 45px; padding: 0 5px; text-align: center; margin: 0 auto;}
.pt-20 { padding-top: 20px !important; }
.bt-5 { border-top: 5px solid #000; }
.br-5 { border-right: 5px solid #000 !important; }
.approval-header th{ text-align: center; }

</style>
@endsection

@section('scripts')
@parent

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
{{ Html::script(mix('assets/admin/js/users/edit.js')) }}
<script>

var maxField = 10; //Input fields increment limitation
var counter = 1;
var addButton = $('.add_apr'); //Add button selector
var wrapper = $('.apr-table'); //Input field wrapper
var x = 1; //Initial field counter is 1

//Once add button is clicked
$(addButton).on('click', function(){
    var fieldHTML = '<tr><td><input type="date" name="apr_date[]" class="form-control" placeholder="" /></td><td><input type="text" name="apr_module[]" class="form-control" placeholder=""></td><td><input type="text" name="apr_tooth_number[]" class="form-control" placeholder="" /></td><td><select name="apr_od_ci[]" class="clinician_instructor form-control" ></select></td><td align="center"><p><button type="button" class="btn btn-danger remove_apr" title="Remove field" value=""><i class="fa fa-times" aria-hidden="true"></i>&ensp;Remove Row</button></p></td></tr>';

    if(x < maxField){ 

$(wrapper).append(fieldHTML); //Add field html

$('.clinician_instructor').select2({
    placeholder: 'Search for Clinician/Instructor',
    ajax: {
        url: '/admin/user-autocomplete-ajax',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {

            return {
                results:  $.map(data, function (user) {
                    return {
                        text: user.name,
                        id: user.id,
                    }

                })
            };
        },
        cache: true
    }
});

x++; 
}
});

$(".apr-table").on("click", "button", function() {
   $(this).closest("tr").remove(); 
    x--;
});


var colors = ['red', 'blue', 'white'],
i = 0;

$(".quarter").click(function(){ 
    var val = $(this).closest("div.quarter").find("input").val(colors[i]);
    $(this).css("backgroundColor", colors[i++]);

    if (i >= colors.length)
        i = 0;
});

$(document).ready(function() {     
    $('.clinician_instructor').select2({
        placeholder: 'Search for Instructor',
        ajax: {
            url: '/admin/user-autocomplete-ajax',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results:  $.map(data, function (user) {
                        return {
                            text: user.name,
                            id: user.id,

                        }
                    })
                };
            },
            cache: true
        }
    });
});

</script>
@endsection