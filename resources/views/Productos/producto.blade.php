@extends('welcome')
@section('encabezado')
<h1>Lista de producto</h1>
<a class="btn btn-primary" href="{{route('producto.create')}}" role="button">Crear</a>    
@endsection
@section('content')
    <table class="table">
                                <thead class="table-primary">
                                  <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Foto</th>
                                    <th>Extra</th>
                                    <th>Categoría</th>
                                    <th>Operaciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($productos as $producto)
                                  <tr>
                                    <td>{{$producto->id}}</td>
                                    <td>{{$producto->nombre}}</td>
                                    <td>{{$producto->descripcion}}</td>
                                    <td>{{$producto->precio}}</td>
                                    <td><div style="width: 80px; height: 80px; border-radius: 50%; overflow: hidden; margin: auto;">
                                        <img src="/img/{{$producto->image}}" style="width: 100%; height: auto;">
                                    </div></td>
                                    <td>{{$producto->extra}}</td>
                                    <td>{{$producto->categoria->nombre}}</td>
                                    <!-- tiene que aparecer lo del id_categoria-->
                                    <td> s</td>
                                    <!--botones  -->
                                    <td>
                
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
@endsection