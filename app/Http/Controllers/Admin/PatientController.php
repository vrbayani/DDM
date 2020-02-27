<?php

namespace App\Http\Controllers\Admin;

use App\Models\Auth\Role\Role;
use App\Models\Auth\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Tooth;
use App\Models\Approval;
use Validator;
use Redirect;
use DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::latest()->paginate(5);

        return view('patients.index',compact('patients'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tooth = 52;
        return view('patients.create',compact('tooth'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);


        $data = $request->all();
    
        $patient = Patient::create($data);
        $data['patient_id'] = $patient->id;


        for ($i = 0; $i < 52; $i++) {
           $arr = array(
            'tooth_1' => $request->tooth_1[$i],
            'tooth_2' => $request->tooth_2[$i],
            'tooth_3' => $request->tooth_3[$i],
            'tooth_4' => $request->tooth_4[$i],
            'tooth_5' => $request->tooth_5[$i],
            'code_1' => $request->code_1[$i],
            'code_2' => $request->code_2[$i],
            'patient_id' => $patient->id
        );

           $tooth =  Tooth::create($arr);
           $patient->tooth()->save($tooth);
       }

       for ($i = 0; $i < count($request->apr_tooth_number); $i++) {
        $apr = array(
            'apr_date' => $request->apr_date[$i],
            'apr_module' => $request->apr_module[$i],
            'apr_approved' => $request->apr_approved[$i],
            'apr_clinician' => $request->apr_clinician[$i],
            'apr_tooth_number' => $request->apr_tooth_number[$i],
            'apr_od_ci' => $request->apr_od_ci[$i],
            'apr_od_ci_id' => null,
            'apr_patient_id' => $patient->id,

        );

        $apr_c =  Approval::create($apr);
        $patient->approval()->save($apr_c);


    }
   

        //$patient = Patient::create($data);
        //$data['patient_id'] = $patient->id;
        //$tooth = Tooth::create($data);
        //$patient->tooth()->save($tooth);


       return redirect()->route('admin.patients.index')
       ->with('success','Patient successfully added to the database.');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::where('id', $id )->first();
        $teeth = Tooth::where('patient_id',$patient->id)->get();
        $approval = Approval::where('apr_patient_id',$patient->id)->get();
        return view('patients.show', compact('patient', 'tooth', 'teeth', 'approval'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        $tooth = 52;
        $teeth = Tooth::where('patient_id',$patient->id)->get();
        $approval = Approval::where('apr_patient_id',$patient->id)->get();
        return view('patients.edit',compact('patient', 'tooth' , 'teeth', 'approval'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $datalist = $request->except('_method', '_token');

        $patientUpdate = Patient::find($patient->id);
        $patientUpdate->fill($datalist);
        $datalist['patient_id'] = $patient->id;
        $tooth_id = $patient->tooth->id;
        $apr_id = $patient->approval->id;

        $apr = Approval::where('apr_patient_id', $patient->id)->get();
        foreach($apr as $a) {
            $a->delete();
        }

        for ($i = 0; $i < 52; $i++) {
           $datatooth = array(
            'tooth_1' => $request->tooth_1[$i],
            'tooth_2' => $request->tooth_2[$i],
            'tooth_3' => $request->tooth_3[$i],
            'tooth_4' => $request->tooth_4[$i],
            'tooth_5' => $request->tooth_5[$i],
            'code_1' => $request->code_1[$i],
            'code_2' => $request->code_2[$i],
            'patient_id' => $patient->id
        );

           $toothUpdate = Tooth::where('id', $tooth_id);
           $toothUpdate->update($datatooth);
           $tooth_id++;
       };
       for ($i = 0; $i < count($request->apr_date); $i++) {
           $apr_e = array(
              'apr_date' => $request->apr_date[$i],
              'apr_module' => $request->apr_module[$i],
              'apr_tooth_number' => $request->apr_tooth_number[$i],
              'apr_od_ci' => $request->apr_od_ci[$i],
              'apr_approved' => $request->apr_approved[$i],
              'apr_patient_id' => $patient->id,
              'apr_clinician' => $request->apr_clinician[$i],
        );

           $aprUpdate = Approval::where('id', $apr_id);
           $aprUpdate->updateOrCreate($apr_e);
           $apr_id++;
       };

       $patientUpdate->update();

       return redirect()->route('admin.patients.index')
       ->with('success','Patient is updated successfully');
   }

    /**
     * Remove the specified resource from storage.
     *  
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Patient::with('tooth')->find($id);
        $teeth = Tooth::where('patient_id',$id)->get();
        foreach($teeth as $t) {
            $t->delete();
        }

        $apr = Approval::where('apr_patient_id',$id)->get();
        foreach($apr as $a) {
            $a->delete();
        }

        $category->delete();

        return redirect()->route('admin.patients.index')
        ->with('success', 'Successfully deleted Patient!');
    }

    public function dataAjax(Request $request)
    {
        $data = [];


        if($request->has('q')){
            $search = $request->q;
            $data = User::select("id","name")
                    ->where('name','LIKE',"%$search%")
                    ->get();
        }


        return response()->json($data);
    }
}
