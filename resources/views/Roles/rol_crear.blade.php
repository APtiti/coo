@extends('welcome')
@section('encabezado')
<font align="center"><h1>Formulario de rol</h1></font>
<a class="btn btn-primary" href="{{route('rol')}}" role="button">Lista</a>
@endsection
@section('content')
    <form action="{{route('rol.store')}}" method="POST">
        @csrf
        <input type="hidden" name="_token" value={{csrf_token()}}>
        <br>
        <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg col-md>
                    <label class="form-label>Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary w-100">Añadir <i class="fa-solid fa-plus-circle"></i></button>

        </div>
        </div>
    </form>
@endsection
            