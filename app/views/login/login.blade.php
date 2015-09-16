@extends('layouts.login')
@section('content')
<div class="row-fluid" style="position: relative">
    <div class="span6" style="margin-left: auto; margin-right: auto; float: none; width: 360px">
        {{ Form::open(array('url' => 'admin/login/login', 'class' => 'form-horizontal form-signin')) }}
        <div class="form-content" style="padding: 0; margin: 0">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <h1 class="panel-title form-signin-heading">Login</h2>
                </div>

                <div class="form-fields">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span>
                        {{ Form::text('email', Input::old("email"), array('placeHolder' => 'Email', 'class' => 'input-block-level')) }}
                    </div>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-lock"></i></span>
                        {{ Form::password('password', array('placeHolder' => 'Clave', 'class' => 'input-block-level'))}}
                    </div>
                </div>
                <br>
                {{ Form::submit('Entrar', array('class' => 'btn btn-primary orange')) }}
                <br><br>
                      <div class="panel-footer links">
                            {{ HTML::link('password/forgot-password','&iquest;Olvidaste tu contrase&ntilde;a?') }}
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>
@stop