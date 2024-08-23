@extends('welcome')
@section('encabezado')
<font align="center"><h1>Lista de Pedidos</h1></font>
@endsection
@section('content')
<div class="container">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($pedidos->count() > 0)
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Número de Pedido</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Dirección</th>
                    <th>Cliente</th>
                    <th>NIT</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->num_pedido }}</td>
                    <td>{{ $pedido->fecha }}</td>
                    <td>{{ $pedido->estado }}</td>
                    <td>{{ $pedido->direccion }}</td>
                    <td>{{ $pedido->user->name }}</td>
                    <td>{{ $pedido->nit }}</td>
                    <td>
                        <a href="{{ route('pedido.show', $pedido->id) }}" class="btn btn-primary">Ver Detalle</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <p>No hay pedidos registrados.</p>
    @endif
</div>
@endsection
