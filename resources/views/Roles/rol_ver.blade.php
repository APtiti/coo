@extends('welcome')
@section('encabezado')
<font align="center"><h1>Ver Rol</h1></font>
@endsection
@section('content')
@csrf
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<div class="mb-3">
    <label class="form-label">Nombre del rol: <strong>{{$rol->nombre}}</strong></label>
</div>
<a class="btn btn-primary" href="{{route('rol')}}" role="button">Volver</a>    
@endsection