@extends('welcome')
@section('encabezado')
<font align="center"><h1>Ver Categoría</h1></font>
@endsection
@section('content')
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<div class="row mb-3">
    <div class="col-md-6 col-12 text-center">
        <img src="/img/{{$categoria->image}}" class="img-fluid img-responsive" width="250" height="250" alt="Imagen de la categoría">
    </div>
    <div class="col-md-6 col-12">
        <label class="form-label">Nombre de la Categoría: <strong>{{$categoria->nombre}}</strong></label>
        <br>
        <label class="form-label">Descripción de la Categoría: <strong>{{$categoria->descripcion}}</strong></label>
        <br>
        <label class="form-label">Código de la Categoría: <strong>{{$categoria->codigo}}</strong></label>
        <br>
        <a class="btn btn-primary" href="{{route('categoria')}}" role="button">Volver</a>   

    </div>
</div>

@endsection