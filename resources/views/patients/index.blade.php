@extends('admin.layouts.admin')

@section('title', 'Patients')

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
            <th>No</th>
            <th>Patient Name</th>
            <th>Birthdate</th>
            <th>Age</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($patients as $patient)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $patient->name }}</td>
            <td>{{ $patient->birth_date }}</td>
            <td>{{ $patient->age }}</td>
            <td>{{ $patient->home_address }}</td>
            <td>
                <a class="btn btn-xs btn-info" href="{{ route('admin.patients.show', $patient->id) }}" 
                    data-title="Edit" data-toggle="tooltip" data-placement="top">
                    <i class="fa fa-eye"></i> View
                </a>

                <a class="btn btn-xs btn-info" href="{{ route('admin.patients.edit', $patient->id) }}" 
                    data-title="Edit" data-toggle="tooltip" data-placement="top">
                    <i class="fa fa-pencil"></i> Edit
                </a>
                @if(Auth::user()->isAdministrator())
                <a href="{{ route('admin.patients.destroy', $patient->id) }}" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip" data-placement="top" data-title="Delete">
                    <i class="fa fa-trash"></i> Delete
                </a>
                @endif

            </form>
        </td>
    </tr>
</tbody>
@endforeach
</table>
<div class="pull-right">
    {{ $patients->links() }}
</div>

</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 p-0">
        <a class="btn btn-primary pull-right" href="{{ route('admin.patients.create') }}"> Add Patient</a>
    </div>
</div>
@endsection