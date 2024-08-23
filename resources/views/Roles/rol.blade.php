@extends('welcome')

@section('encabezado')
    <div class="text-center">
        <h1>Lista de Rol</h1>
    </div>
    <div class="text-center mb-3">
        <a class="btn btn-primary" href="{{ route('rol.create') }}" role="button">Crear</a>
    </div>
@endsection

@section('content')
    <div class="table-responsive">
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
                        <th>{{ $roles->id }}</th>
                        <td>{{ $roles->nombre }}</td>
                        <td>
                            <a class="btn btn-primary me-2" role="button" href="{{ route('rol.show', $roles->id) }}">Ver</a>
                            <a class="btn btn-success me-2" role="button" href="{{ route('rol.edit', $roles->id) }}">Editar</a>
                            <form action="{{ route('rol.destroy', $roles->id) }}" method="POST" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-danger" value="Eliminar" onclick="return EliminarRegistro('Eliminar rol')">
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
