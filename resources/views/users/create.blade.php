@extends('adminlte::page')

@section('title', 'Creacion')

@section('content_header')
<h1>Creacion de Usuario</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>create New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('users.index')}}"> Back</a>
        </div>
    </div>
</div>

@if (count($errors)>0)
<div class="alert alert-danger">
    <strong>whoops!</strong>there were some problems wtuh your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$errors}}</li>
        @endforeach
    </ul>
</div>
@endif

{!! Form::open(array('route' => 'users.store','method' => 'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control') )!!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email',null, array('placeholder' => 'Email','class' => 'form-control') )!!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password',null, array('placeholder' => 'Password','class' => 'form-control') )!!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('Confirm-password',null, array('placeholder' => 'Confirm Password','class' => 'form-control') )!!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]',$roles,[], array('class' => 'form-control','multiple') )!!}
        </div>
    </div>
    <div class = "col-xs-12 col-sm-12 text-center ">
        <button type="submit" class="btn btn-primary">submit</button>
    </div>
</div>
{!! Form::close() !!}
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop