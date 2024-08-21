@extends('welcome')
@section('encabezado')
<font align="center"><h1>Formulario de producto</h1></font>
<a class="btn btn-primary" href="{{route('producto')}}" role="button">Lista</a>    
@endsection
@section('content')
<form action="{{route('producto.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <br>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label class="form-label">Precio</label>
                    <input type="number" class="form-control" name="precio">
                </div>
            </div>    
            <div class="row">
                
                <div class="col-lg-12 col-md-12">
                    <label class="form-label">Foto</label><br>
                    <input type="file" id="image" name="image" accept="image/png, image/jpeg">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label class="form-label">Extra</label>
                    <input type="text" class="form-control" name="extra">
                </div>
                <br>
                <div class="col-lg-4 col-md-4">
                    <label class="form-label">Categoria</label>
                    <select class="form-select" name="id_categoria" id="id_categoria" aria-label="Default select example">
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}"> {{$categoria->nombre}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <br>
                    <button type="submit" class="btn btn-primary" >Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
            