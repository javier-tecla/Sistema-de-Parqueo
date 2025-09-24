@extends('adminlte::page')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de roles</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Inicio</a></li>
                    <li class="breadcrumb-item active">Roles</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-primary shadow-none">
                <div class="card-header">
                    <h3 class="card-title"><b>Roles registrados</b></h3>
                    <!-- /.card-tools -->
                    <div class="card-tools">
                        <a href="{{ url('/admin/roles/create')}}" class="btn btn-primary"><i class="fas fa-plus"> Crear nuevo</i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">Nro</th>
                                            <th>Rol</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role)
                                        <tr>
                                            <td style="text-align: center">{{$loop->iteration}}</td>
                                            <td>{{$role->name}}</td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"> Editar</i></a>
                                                <a href=""></a>
                                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"> Eliminar</i></a>
                                                <a href=""></a>
                                            </td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
