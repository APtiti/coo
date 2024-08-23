@extends('welcome')
@section('encabezado')
<font align="center"><h1>Formulario de producto</h1></font>
<a class="btn btn-primary" href="{{route('producto')}}" role="button">Lista</a>
@endsection
@section('content')
<form action="{{route('producto.update',$producto->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{method_field('PUT')}}
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <br>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}">
                </div>
                <div class="col-lg-6 col-md-6 mb-3">
                    <label class="form-label">Descripción</label>
                    <input type="text" name="descripcion" class="form-control" value="{{ $producto->descripcion }}">
                </div>
                <div class="col-lg-6 col-md-6 mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number" name="precio" class="form-control" value="{{ $producto->precio }}">
                </div>
                <div class="col-lg-6 col-md-6 mb-3">
                    <label class="form-label">Categoria</label>
                    <select class="form-select" name="id_categoria" id="id_categoria" aria-label="Default select example">
                        @foreach ($categoria as $categoria)
                            <option value="{{$categoria->id}}"> {{$categoria->nombre}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 mb-3">
                    <label class="form-label">Extra</label>
                    <input type="text" name="extra" class="form-control" value="{{ $producto->extra }}">
                </div>
                <div class="col-lg-6 col-md-6 mb-3">
                    <label class="form-label">Imagen</label>
                    <input type="file" name="image" accept="image/png, image/jpeg" class="form-control-file">
                </div>
                <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!--<button type="submit" class="btn btn-primary form-control">Añadir</button>!-->
</form>
@endsection