@extends('admin.layouts.admin')

@section('title','Create Module') )

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
        {{ Form::open(['route'=>['admin.approvals.store'],'method' => 'post','class'=>'form-horizontal form-label-left']) }}


        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Module Number:</strong>
                <input type="number" name="module_number" class="form-control" placeholder="Module Number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                <textarea class="form-control" style="height:150px" name="details" placeholder="Details"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <button type="submit" class="btn btn-success pull-right">Save</button>
                <a class="btn btn-primary pull-right" href="{{ URL::previous() }}">Cancel</a>
                
            </div>
        </div>
        {{ Form::close() }}

    </div>
</div>

</form>
@endsection