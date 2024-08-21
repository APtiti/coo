@extends('welcome')
@section('encabezado')
<font align="center"><h1>Crear Categoria</h1></font>
@endsection
@section('content')
<form action="{{ route('categoria.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="mb-3">
        <label class="form-label">Nombre <i class="fa-solid fa-tag"></i></label>
        <input type="text" class="form-control custom-input" name="nombre">
    </div>

    <div class="mb-3">
        <label class="form-label">Descripción <i class="fa-solid fa-file-alt"></i></label>
        <input type="text" class="form-control custom-input" name="descripcion">
    </div>

    <div class="mb-3">
        <label class="form-label">Código <i class="fa-solid fa-barcode"></i></label>
        <input type="number" class="form-control custom-input" name="codigo">
    </div>

    <div class="mb-3">
        <label class="form-label">Imagen <i class="fa-solid fa-image"></i></label><br>
        <input type="file" id="image" name="image" accept="image/png, image/jpeg">
    </div>

    <button type="submit" class="btn btn-primary w-100">Añadir <i class="fa-solid fa-plus-circle"></i></button>
</form>
@endsection