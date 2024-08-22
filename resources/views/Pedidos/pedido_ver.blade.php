@extends('layout')

@section('content')
<div class="container">
    <h1 class="my-4">Detalle del Pedido</h1>

    <div class="row">
        <div class="col-md-6">
            <h4>Número de Pedido: {{ $pedido->num_pedido }}</h4>
            <p><strong>Fecha:</strong> {{ $pedido->fecha }}</p>
            <p><strong>Estado:</strong> {{ $pedido->estado }}</p>
            <p><strong>Cliente:</strong> {{ $pedido->user->name }}</p>
            <p><strong>Dirección:</strong> {{ $pedido->direccion }}</p>
        </div>
    </div>

    <h4>Detalles del Pedido</h4>
    @if ($pedido->detalles->count() > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach ($pedido->detalles as $detalle)
                    @php
                        $producto = $detalle->producto;
                        $subtotal = $detalle->cantidad * $detalle->total;
                        $total += $subtotal;
                    @endphp
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>${{ $producto->precio }}</td>
                        <td>{{ $detalle->cantidad }}</td>
                        <td>${{ $subtotal }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-right"><strong>Total:</strong></td>
                    <td>${{ $total }}</td>
                </tr>
            </tfoot>
        </table>
    @else
        <p>No hay detalles para este pedido.</p>
    @endif
</div>
@endsection
