@extends('admin.layouts.admin')

@section('title', 'Modules')

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
            <th>Name</th>
            <th>Module Number</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($modules as $module)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $module->name }}</td>
            <td>{{ $module->module_number }}</td>
            <td>{{ $module->details }}</td>
            <td>

                <a class="btn btn-xs btn-info" href="{{ route('admin.modules.edit', $module->id) }}" 
                    data-title="Edit" data-toggle="tooltip" data-placement="top">
                    <i class="fa fa-pencil"></i> Edit
                </a>

                <a href="{{ route('admin.modules.destroy', $module->id) }}" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip" data-placement="top" data-title="Delete">
                    <i class="fa fa-trash"></i> Delete
                </a>

            </form>
        </td>
    </tr>
</tbody>
@endforeach
</table>
<div class="pull-right">
    {{ $modules->links() }}
</div>

</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 p-0">
        <a class="btn btn-primary pull-right" href="{{ route('admin.modules.create') }}"> Create Module</a>
    </div>
</div>
@endsection