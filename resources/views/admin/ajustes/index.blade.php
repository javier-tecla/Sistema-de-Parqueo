@extends('adminlte::page')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ajustes del sistema</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Inicio</a></li>
                    <li class="breadcrumb-item active">Ajustes</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary shadow-none">
                <div class="card-header">
                    <h3 class="card-title">Llene los campos del formulario</h3>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nombre">Nombre del Sistema <sup
                                                    class="text-danger">(*)</sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-building"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" name="nombre" id="nombre"
                                                    value="{{ old('nombre') }}" placeholder="Ej: Sistema Parqueo" required>
                                            </div>
                                            @error('nombre')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="descripcion">Descripción <sup class="text-danger">(*)</sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-align-left"></i>
                                                    </span>
                                                </div>
                                                <textarea class="form-control" name="descripcion" id="descripcion" rows="1"
                                                    placeholder="Descripción del negocio..." required>{{ old('descripcion') }}</textarea>
                                            </div>
                                            @error('descripcion')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="sucursal">Sucursal <sup class="text-danger">(*)</sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-building"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" name="sucursal" id="sucursal"
                                                    value="{{ old('sucursal') }}" placeholder="Ej: Sucursal Centro"
                                                    required>
                                            </div>
                                            @error('sucursal')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="telefono">Teléfono <sup class="text-danger">(*)</sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-building"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" name="telefono" id="telefono"
                                                    value="{{ old('telefono') }}" placeholder="Ej: +54 911 1234567"
                                                    required>
                                            </div>
                                            @error('telefono')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="direccion">Dirección <sup class="text-danger">(*)</sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-home"></i>
                                                    </span>
                                                </div>
                                                <textarea class="form-control" name="direccion" id="direccion" rows="1" placeholder="Dirección completa..."
                                                    required>{{ old('direccion') }}</textarea>
                                            </div>
                                            @error('direccion')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="sucursal">moneda <sup class="text-danger">(*)</sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </span>
                                                </div>
                                                <select class="form-control" name="divisa" id="divisa" required>
                                                    <option value="" disabled selected>Seleccione moneda...</option>
                                                    @foreach ($divisas as $divisa)
                                                        <option value="{{ $divisa['symbol'] }}">
                                                            {{ $divisa['name'] . ' - (' . $divisa['symbol'] . ')' }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('divisa')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="correo">Correo Electrónico <sup
                                                    class="text-danger">(*)</sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-envelope"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" name="correo" id="correo"
                                                    value="{{ old('correo') }}" placeholder="info@tuempresa.com"
                                                    required>
                                            </div>
                                            @error('correo')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="pagina_web">Página Web <sup class="text-danger">(*)</sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-globe"></i>
                                                    </span>
                                                </div>
                                                <input type="pagina_web" class="form-control" name="pagina_web"
                                                    id="pagina_web" value="{{ old('pagina_web') }}"
                                                    placeholder="https://www.tuempresa.com">
                                            </div>
                                            @error('pagina_web')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="logo">Logo Principal <sup
                                                    class="text-danger">(*)</sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-image"></i>
                                                    </span>
                                                </div>
                                                <input type="file" class="form-control" name="logo" id="logo"
                                                    accept="image/*" onchange="mostrarImagen(event)" required>
                                            </div>
                                            <center>
                                                <img id=preview1 src=""
                                                    style="max-width: 100px; margin-top: 10px;">
                                            </center>
                                            @error('logo')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <script>
                                        const mostrarImagen = e => document.getElementById('preview1').src = URL.createObjectURL(e.target.files[0]);
                                    </script>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="logo_auto">Logo para auto <sup
                                                    class="text-danger">(*)</sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-car"></i>
                                                    </span>
                                                </div>
                                                <input type="file" class="form-control" name="logo_auto"
                                                    id="logo_auto" accept="image/*" onchange="mostrarImagen2(event)"
                                                    required>
                                            </div>
                                            <center>
                                                <img id=preview2 src=""
                                                    style="max-width: 100px; margin-top: 10px;">
                                            </center>
                                            @error('logo_auto')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <script>
                                        const mostrarImagen2 = e => document.getElementById('preview2').src = URL.createObjectURL(e.target.files[0]);
                                    </script>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-danger">(*) Campos obligatorios</p>
                                <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i>
                                    Guardar</button>
                            </div>
                        </div>
                    </form>
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
