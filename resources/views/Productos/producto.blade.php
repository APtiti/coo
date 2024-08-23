@extends('welcome')

@section('encabezado')
    <div class="text-center">
        <h1>Lista de Productos</h1>
    </div>
    <div class="text-center mb-3">
        <a class="btn btn-primary" href="{{ route('producto.create') }}" role="button">Crear</a>
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
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>
                            <div style="width: 80px; height: 80px; border-radius: 50%; overflow: hidden;">
                                <img src="/img/{{ $producto->image }}" style="width: 100%; height: auto;">
                            </div>
                        </td>
                        <td>{{ $producto->extra }}</td>
                        <td>{{ $producto->categoria->nombre }}</td>
                        <td>
                            <a class="btn btn-primary me-2" role="button" href="{{ route('producto.show', $producto->id) }}">Ver</a>
                            <a class="btn btn-success me-2" role="button" href="{{ route('producto.edit', $producto->id) }}">Editar</a>
                            <form action="{{ route('producto.destroy', $producto->id) }}" method="POST" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-danger" value="Eliminar" onclick="return EliminarRegistro('Eliminar producto')">
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
