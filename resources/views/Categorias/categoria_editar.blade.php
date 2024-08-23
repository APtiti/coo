@extends('welcome')
@section('encabezado')
<font align="center"><h1>Formulario de categoria</h1></font>
<a class="btn btn-primary" href="{{route('categoria')}}" role="button">Lista</a>
@endsection
@section('content')
<form action="{{route('categoria.update',$categoria->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{method_field('PUT')}}
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <br>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <label class="form-label" >Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}}">
                </div>
                <div class="col-lg-6 col-md-6">
                    <label for="form-label">Codigo</label>
                    <input type="number" class="form-control" name="codigo" value="{{$categoria->codigo}}">
                </div>
                <div class="col-lg-6 col-md-6">
                    <label class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" value="{{$categoria->descripcion}}">
                </div>
                <div class="col-lg-6 col-md-6">
                    <label class="form-label">Imagen</label><br>
                    <input type="file" id="image" name="image" accept="image/png, image/jpeg" class="form-control-file">
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