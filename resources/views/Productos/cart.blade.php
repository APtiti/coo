@extends('layout')

@section('content')
<h2>Detalles del Pedido</h2><hr>
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:35%">Producto</th>
            <th style="width:15%">Descripcion</th>
            <th style="width:10%">Precio</th>
            <th style="width:8%">Cantidad</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['precio'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('img') }}/{{ $details['image'] }}" width="80" height="80" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['nombre'] }}</h4>
                                <h5 class="nomargin">{{ $details['extra'] }}</h5>
                            </div>
                        </div>
                    </td>
                    <td data-th="Descripción">{{ $details['descripcion'] }}</td>
                    <td data-th="Precio">${{ $details['precio'] }}</td>
                    <td data-th="Cantidad">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['precio'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Eliminar</button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h4><strong>Total ${{ $total }}</strong></h4></td>
        </tr>
        <tr>
            <td colspan="5" >
                <form action="{{ route('pedido.store') }}" method="POST">
                    @csrf
                    <h3>Datos del Pedido</h3>
                    <input type="text" name="direccion" placeholder="Dirección"> <!-- Dirección debe ser proporcionada -->
                    <input type="text" name="nit" maxlength="11" pattern="\d*" title="El NIT debe contener solo números y no más de 11 dígitos" placeholder="NIT">
                    <div class="text-right">
                        <a href="{{ url('/menu') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i>Seguir comprando</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-money"></i> Pedir</button>
                    </div>
                </form>
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">
    $(".cart_update").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".cart_remove").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        if(confirm("Quieres remover este producto?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
</script>
@endsection
