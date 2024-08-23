@extends('welcome')
@section('encabezado')
<font align="center"><h1>Formulario de rol</h1></font>
<a class="btn btn-primary" href="{{route('rol')}}" role="button">Lista</a>    
@endsection
@section('content')
<form action="{{route('rol.update',$rol->id)}}" method="POST">
    @csrf
    {{method_field('PUT')}}
    <input type="hidden" name="_token" value={{csrf_token()}}><br>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-md->
                    <label class="form-label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{$rol->nombre}}">
                </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <br>
                <button type="submit" class="btn btn-primary" >Guardar</button>
            </div>
            </div>
        </div>
    </div>
<!--<button type="submit" class="btn btn-primary form-control">Añadir</button>!-->
</form>
@endsection
            