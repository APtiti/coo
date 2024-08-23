@extends('welcome')
@section('encabezado')
<div class="text-center">
    <h1>Lista de Usuarios Registrados</h1>
</div>
<div class="text-center mb-3">
    <a class="btn btn-primary" href="{{ route('register.index') }}" role="button">Crear</a>
</div>
@endsection
@section('content')
<div class="table-responsive">
<table class="table">
    <thead class="table-primary">
      <tr>
        <th>Usuario</th>
        <th>Gmail</th>
        <th>Rol</th>        
        <th>Operaciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach($user as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->rol->nombre }}</td>
        <td>
            <form action="{{ route('usuario.destroy', $user->id) }}" method="POST" class="d-inline">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-danger" value="Eliminar" onclick="return EliminarRegistro('Eliminar usuario')">
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<script>
    function EliminarRegistro(value){
        action=confirm(value) ? true: event.preventDefault()
    }
</script>
@endsection