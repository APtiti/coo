@extends('welcome')
@section('encabezado')
<font align="center"><h1>Ver Producto</h1></font>
@endsection
@section('content')
@csrf
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<div class="row mb-3">
    <div class="col-md-6 col-12 text-center">
        <img src="/img/{{$producto->image}}" class="img-fluid img-responsive" width="250" height="250" alt="Imagen de la categoría">
    </div>
    <div class="col-md-6 col-12">
        <label class="form-label">Nombre del Producto: <strong>{{$producto->nombre}}</strong></label>
        <br>
        <label class="form-label">Descripción del Producto: <strong>{{$producto->descripcion}}</strong></label>
        <br>
        <label class="form-label">Precio del Producto: <strong>{{$producto->precio}}</strong></label>
        <br>
        <label class="form-label">Detalle extra del Producto: <strong>{{$producto->extra}}</strong></label>
        <br>
        <label class="form-label">Categoría del Producto: <strong>{{$producto->categoria->nombre}}</strong></label>
        <br>
        <a class="btn btn-primary" href="{{route('producto')}}" role="button">Volver</a>   

    </div>
</div>
@endsection