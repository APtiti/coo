@extends('welcome')
@section('content')
<section class="products-by-category">
    <h2>Productos en la categoría: {{ $categoria->nombre }}</h2>
    <div class="product-list row">
    @foreach ($productos as $item)
        <div class="col-3">
            <div class="card">
                <img src="/img/{{$item->image}}" class="card-img-top">
                <div class="card-body text-center">
                    <h2>{{$item->nombre}}</h2>
                    <p> Bs {{$item->precio}}</p>
                    <div class="quantity-buttons-container">
                        <button class="quantity-button decrement" data-id="{{ $item->id }}">-</button>
                        <input type="number" class="quantity-input" id="quantity-{{ $item->id }}" value="0" readonly>
                        <button class="quantity-button increment" data-id="{{ $item->id }}">+</button>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="{{ route('add') }}" method="post" class="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <input type="hidden" name="quantity" id="hidden-quantity-{{ $item->id }}" value="0">
                        <button type="submit" class="btn btn-primary w-100">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach   
    </div>
</section>
</main>

<script>
//Sweetalert Alertas//
function errorstock(){
Swal.fire({
title: "¡Ocurrió un problema!",
text: "La cantidad no puede ser 0",
icon: "error"
});
}

document.addEventListener('DOMContentLoaded', function() {
document.querySelectorAll('.increment').forEach(button => {
    button.addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        const quantityInput = document.getElementById('quantity-' + id);
        const hiddenQuantityInput = document.getElementById('hidden-quantity-' + id);
        let quantity = parseInt(quantityInput.value);
        const maxQuantity = parseInt(quantityInput.getAttribute('max'));
        if (quantity < maxQuantity) {
            quantityInput.value = ++quantity;
            hiddenQuantityInput.value = quantity;
        }
    });
});

document.querySelectorAll('.decrement').forEach(button => {
    button.addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        const quantityInput = document.getElementById('quantity-' + id);
        const hiddenQuantityInput = document.getElementById('hidden-quantity-' + id);
        let quantity = parseInt(quantityInput.value);
        if (quantity > 0) {
            quantityInput.value = --quantity;
            hiddenQuantityInput.value = quantity;
        }
    });
});

document.querySelectorAll('.add-to-cart-form').forEach(form => {
    form.addEventListener('submit', function(event) {
        const id = this.querySelector('input[name="id"]').value;
        const quantity = document.getElementById('quantity-' + id).value;
        if (quantity == 0) {
            event.preventDefault();
            errorstock();
        }
    });
});
});
</script>
@endsection