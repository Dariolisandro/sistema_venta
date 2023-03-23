@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
<h1></h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Gestion de Roles</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('roles.create') }}">Create New Role</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message}}</p>
</div>
@endif
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop