@extends('welcome')

@section('encabezado')
    <div class="text-center">
        <h1>Lista de Categoría</h1>
    </div>
    <div class="text-center mb-3">
        <a class="btn btn-primary" href="{{ route('categoria.create') }}" role="button">Crear</a>
    </div>
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Código</th>
                    <th>Foto</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categoria as $categorias)
                    <tr>
                        <th>{{ $categorias->id }}</th>
                        <td>{{ $categorias->nombre }}</td>
                        <td>{{ $categorias->descripcion }}</td>
                        <td>{{ $categorias->codigo }}</td>
                        <td>
                            <div style="width: 80px; height: 80px; border-radius: 50%; overflow: hidden; margin: auto;">
                                <img src="/img/{{ $categorias->image }}" style="width: 100%; height: auto;">
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-primary me-2" role="button" href="{{ route('categoria.show', $categorias->id) }}">Ver</a>
                            <a class="btn btn-success me-2" role="button" href="{{ route('categoria.edit', $categorias->id) }}">Editar</a>
                            <form action="{{ route('categoria.destroy', $categorias->id) }}" method="POST" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-danger" value="Eliminar" onclick="return EliminarRegistro('Eliminar categoria')">
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
