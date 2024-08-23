@extends('welcome')
@section('encabezado')
<font align="center"><h1>Crear Categoria</h1></font>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('categoria.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Código</label>
                    <input type="number" class="form-control" name="codigo">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Imagen</label><br>
                <input type="file" id="image" name="image" accept="image/png, image/jpeg" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary w-100">Añadir <i class="fa-solid fa-plus-circle"></i></button>
        </form>
    </div>
</div>
@endsection
