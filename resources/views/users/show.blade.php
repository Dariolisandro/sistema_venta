@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div>
    <div class = "col-xs-12 col-sm-12 col-md-12">
        <div class ="form-group">
            <strong>Name:</strong>
             {{ $user->name }}
        </div>
    </div> 
    <div class = "col-xs-12 col-sm-12 col-md-12">
        <div class ="form-group">
            <strong>Email:</strong>
             {{ $user->email }}
        </div>
    </div>
    <div class = "col-xs-12 col-sm-12 col-md-12">
        <div class ="form-group">
            <strong>Roles:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user ->getRoleNames() as $v)
                    <label class= "badge badge-success">{{ $v }}</label>
                @endforeach
            "@endif"    
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop