@extends('auth.layouts.auth')

@section('body_class','login')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-5 logo" style="text-align: right;">
                <img src="{{ asset('/assets/admin/img/CEU.PNG') }}" />
            </div>
            <div class="col-md-2 logo" style="text-align: center;">
                <h1>CEU Dental <br/> Database</h1>
            </div>
            <div class="col-md-5 logo" style="text-align: left;">
                <img src="{{ asset('/assets/admin/img/ceud.gif') }}" />
            </div>
        </div>
    </div>
</div>



    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    {{ Form::open(['route' => 'login']) }}
                        <h1>{{ __('views.auth.login.header') }}</h1>

                        <div>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   placeholder="{{ __('views.auth.login.input_0') }}" required autofocus>
                        </div>
                        <div>
                            <input id="password" type="password" class="form-control" name="password"
                                   placeholder="{{ __('views.auth.login.input_1') }}" required>
                        </div>
                        <div class="checkbox al_left">
                            <label>
                                <input type="checkbox"
                                       name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('views.auth.login.input_2') }}
                            </label>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (!$errors->isEmpty())
                            <div class="alert alert-danger" role="alert">
                                {!! $errors->first() !!}
                            </div>
                        @endif

                        <div>
                            <button class="btn btn-default submit" type="submit">{{ __('views.auth.login.action_0') }}</button>
                            <a class="reset_pass" href="{{ route('password.request') }}">
                                {{ __('views.auth.login.action_1') }}
                            </a>
                        </div>

                        <div class="clearfix"></div>
                    {{ Form::close() }}
                </section>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    @parent

    {{ Html::style(mix('assets/auth/css/login.css')) }}
@endsection