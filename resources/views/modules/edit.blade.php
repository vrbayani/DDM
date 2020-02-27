@extends('admin.layouts.admin')

@section('title','Edit Module')

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


{{ Form::open(['route'=>['admin.modules.update',$module->id],'method' => 'put','class'=>'form-horizontal form-label-left']) }}

<div class="row">
    <div class=" col-xs-12 col-md-6 col-sm-6">
     <label  for="name" >
         Name
        <span class="required">*</span>
    </label>
    <input id="name" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('name')) parsley-error @endif"
    name="name" value="{{ $module->name }}" required>
    @if($errors->has('name'))
    <ul class="parsley-errors-list filled">
        @foreach($errors->get('name') as $error)
        <li class="parsley-required">{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
    <div class="form-group">
        <strong>Module Number:</strong>
        <input type="number" name="module_number" value="{{ $module->module_number }}" class="form-control" placeholder="Module Number"/>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Details:</strong>
        <textarea class="form-control" style="height:150px" name="details" placeholder="Details">{{ $module->details }}</textarea>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <a class="btn btn-primary" href="{{ URL::previous() }}"> Back </a>
        <button type="submit" class="btn btn-success"> Save </button>
    </div>
</div>
</div>
{!! Form::close() !!}
@endsection


@section('styles')
@parent
{{ Html::style(mix('assets/admin/css/users/edit.css')) }}
@endsection

@section('scripts')
@parent
{{ Html::script(mix('assets/admin/js/users/edit.js')) }}
@endsection