@extends('welcome')
@section('encabezado')
<font align="center"><h1>Lista de categoria</h1></font>
<a class="btn btn-primary" href="{{route('categoria.create')}}" role="button">Crear</a>    
@endsection
@section('content')
    <table class="table">
                              <thead class="table-primary">
                                <tr>
                                  <th>Id</th>
                                  <th>Nombre</th>
                                  <th>Descripción</th>
                                  <th>Codigo</th>
                                  <th>Foto</th>
                                  <th>Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach($categoria as $categorias)
                                <tr>
                                  <th>{{$categorias->id}}</th>
                                  <td>{{$categorias->nombre}}</td>
                                  <td>{{$categorias->descripcion}}</td>
                                  <td>{{$categorias->codigo}}</td>
                                  <td><div style="width: 80px; height: 80px; border-radius: 50%; overflow: hidden; margin: auto;">
                                    <img src="/img/{{$categorias->image}}" style="width: 100%; height: auto;">
                                </div></td>
                                  
                                  <td>
                                      <a class="btn btn-primary" role="button" href="{{route('categoria.show',$categorias->id)}}">ver</a>
                                      <a class="btn btn-success" role="button" href="{{route('categoria.edit',$categorias->id)}}">editar</a>                       
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
@endsection
                          