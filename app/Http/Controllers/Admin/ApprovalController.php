<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Module;
use App\Models\Patient;
use App\Models\Tooth;
use App\Models\Approval;
use App\Models\Auth\User\User;
use App\Models\Auth\Role\Role;
use Validator;
use Input;
use Redirect;
use DB;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $approvals = Approval::all();

        return view('approvals.index',compact('approvals'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    public function approvalStatus(Request $request, Approval $approval) {       

        $apprUpdate = Approval::find($request->apr_id);
        $apprUpdate->update(['apr_approved'=> $request->apr_approved]);

        if (!$apprUpdate) {
            App::abort(404);
        }


        return redirect()->route('admin.approvals.index')
        ->with('success','Changes is saved successfully');
    }


}
