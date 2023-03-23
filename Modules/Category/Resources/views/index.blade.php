@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1></h1>
@stop

@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-tittle">
            categorias
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categorias</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="Card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Categorias</h4>
                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas-fa-ellipsis-v"></i>
                            </a>
                            <div clas="dropdown-menu dropdown-menu-right">
                                <a href="{{route('categories.create')}}" class="dropdown-item"></a>

                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach {$categories as $category}
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>
                                        <a href="{{route('categorie.show',$category)}}">{{$category->name}}</a>
                                    </td>
                                    <td>{{$category->description}}</td>
                                    <td style="width: 50px;">
                                        {!!Form::open(['route' =>['categories.destroy',
                                        $category],'method' => 'DELETE' ])!!}
                                        <a class="jsgrid-button jsgrid-edit-button" 
                                        href="{{route('categorie.edit',$category)}}" title="Editar">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a class="jsgrid-button jsgrid-delete-button" type="submit" title="Eliminar">
                                            <i class="far fa-tash-alert"></i>
                                        </a>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>

</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>


@stop