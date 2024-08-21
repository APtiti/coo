@extends('layout')
    
@section('content')
<div class="container">
    <div class="row">
        @foreach($products as $product)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 text-center">
                    <img src="{{ asset('img') }}/{{ $product->image }}" class="card-img-top img-fluid" alt="{{ $product->nombre }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->nombre }}</h5>
                        <p class="card-text">{{ $product->descripcion }}</p>
                        <p><strong>Precio: </strong> ${{ $product->precio }}</p>
                        <a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-primary mt-auto">Añadir al carrito</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
