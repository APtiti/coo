@extends('welcome')
@section('encabezado')
<font align="center"><h1>Lista de rol</h1></font>
<a class="btn btn-primary" href="{{route('rol.create')}}" role="button">Crear</a>    
@endsection
@section('content')
    <table class="table">
                                <thead class="table-primary">
                                  <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Operaciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($rol as $roles)
                                  <tr>
                                    <th>{{$roles->id}}</th>
                                    <td>{{$roles->nombre}}</td>
                                    <td>
                                        <a class="btn btn-primary" role="button" href="{{route('rol.show',$roles->id)}}">ver</a>
                                        <a class="btn btn-success" role="button" href="{{route('rol.edit',$roles->id)}}">editar</a>                       
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
@endsection                    