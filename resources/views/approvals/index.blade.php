@extends('admin.layouts.admin')

@section('title', 'Approvals')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="row">
    <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
    width="100%">
    <thead>
        <tr>
            <th class="text-center" width="5%">No</th>
            <th class="text-center" width="15%">Patient Name</th>
            <th class="text-center" width="15%">Module Name</th>
            <th class="text-center" width="5%">Tooth Number</th>
            <th class="text-center" width="10%">Clinician</th>
            <th class="text-center" width="5%">Module Date</th>
            <th class="text-center" width="15%">Instructor</th>
            <th class="text-center" width="5%">Status</th>
            <th class="text-center" width="15%">Action</th>
        </tr>
    </thead>
    <tbody>
        @inject('users','App\Models\Auth\User\User')
        @foreach ($approvals as $approval)
        <tr>
            <td>{{ ++$i }}</td>
            <td>
                <a href="{{ route('admin.patients.show', $approval->patient->id) }}">
                    {{ $approval->patient->name }}
                </a>
            </td>
            <td>{{ $approval->apr_module }}</td>
            <td>{{ $approval->apr_tooth_number }}</td>
            <td>{!! $users->where('id','=',$approval->apr_clinician)->get('name')->pluck('name')->first() !!}</td>
            <td>{{ date('d-m-Y', strtotime($approval->apr_date)) }}</td>
            <td>{!! $users->where('id','=',$approval->apr_od_ci)->get('name')->pluck('name')->first() !!}</td>
            <td class="text-center">
                @if($approval->apr_approved == 1)
                    <span class="label label-success"><i class="fa fa-check"></i>&nbsp;Approved</span>
                @elseif($approval->apr_approved == 2)
                    <span class="label label-danger"><i class="fa fa-check"></i>&nbsp;Declined</span>
                @elseif($approval->apr_approved == 3)
                    <span class="label label-info"><i class="fa fa-check"></i>&nbsp;Pending</span>
                @else
                    <span class="label label-primary"><i class="fa fa-refresh"></i>&nbsp;Waiting</span>
                @endif

            </td>
            <td class="text-center">
                @if($approval->apr_od_ci ==  auth()->user()->id)
                <div class="col-md-4" style="padding:0;">
                    {{ Form::open(['route'=>['admin.approval.update', $approval->id],'method' => 'put']) }}
                    <input name="apr_id" type="hidden" value="{{ $approval->id }}">
                    <input name="apr_approved" type="hidden" value="1">
                    <button type="submit" class="btn btn-success btn-xs pull-right" name="apr_approved" value="1">
                        <i class="fa fa-check"></i>&nbsp;Approve    
                    </button>
                    {{ Form::close() }}
                </div>
                <div class="col-md-4" style="padding:0;">
                    {{ Form::open(['route'=>['admin.approval.update', $approval->id],'method' => 'put']) }}
                    <input name="apr_id" type="hidden" value="{{ $approval->id }}">
                    <input name="apr_approved" type="hidden" value="2">
                    <button type="submit" class="btn btn-danger btn-xs " name="apr_approved" value="2">
                        <i class="fa fa-remove"></i>&nbsp;Decline
                    </button>
                    {{ Form::close() }}
                </div>
                <div class="col-md-4" style="padding:0;">
                    {{ Form::open(['route'=>['admin.approval.update', $approval->id],'method' => 'put']) }}
                    <input name="apr_id" type="hidden" value="{{ $approval->id }}">
                    <input name="apr_approved" type="hidden" value="3">
                    <button type="submit" class="btn btn-info btn-xs pull-left" name="apr_approved" value="3">
                        <i class="fa fa-minus"></i>&nbsp;Pending
                    </button>
                    {{ Form::close() }}
                </div>
                @endif
            </td>
        </tr>
    </tbody>
@endforeach
</table>
<div class="pull-right">
</div>

</div>
@endsection