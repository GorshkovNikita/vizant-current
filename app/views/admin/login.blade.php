@extends('layouts.admin-layout')

@section('title') Вход в администраторскую панель @stop

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    @if ($errors->has())
    @foreach ($errors->all() as $error)
        <div class='bg-danger alert'>{{ $error }}</div>
    @endforeach
    @endif

    <h1><i class='fa fa-lock'></i> Login</h1>

    {{ Form::open(['role' => 'form', 'method' => 'post']) }}

    <div class='form-group'>
        {{ Form::label('email', 'E-Mail') }}
        {{ Form::text('email', null, ['placeholder' => 'E-Mail', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}

</div>

@stop