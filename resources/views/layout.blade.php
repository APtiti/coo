<!DOCTYPE html>
<html>
<head>
    <title>BiancaFlor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mi Tienda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito 
                            <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </button>

                        <div class="dropdown-menu dropdown-menu-right p-3" style="width: 300px;">
                            <div class="total-header-section mb-3">
                                @php $total = 0 @endphp
                                @foreach((array) session('cart') as $id => $details)
                                    @php $total += $details['precio'] * $details['quantity'] @endphp
                                @endforeach
                                <div class="total-section text-right">
                                    <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                </div>
                            </div>
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    <div class="cart-detail d-flex align-items-center mb-2">
                                        <div class="cart-detail-img">
                                            <img src="{{ asset('img') }}/{{ $details['image'] }}" width="60" height="60"/>
                                        </div>
                                        <div class="cart-detail-product ml-3">
                                            <p class="mb-0">{{ $details['nombre'] }}</p>
                                            <span class="price text-info"> ${{ $details['precio'] }}</span> 
                                            <span class="count"> Cantidad:{{ $details['quantity'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="text-center checkout">
                                <a href="{{ route('cart') }}" class="btn btn-primary btn-block">Ver todo</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
    <br/>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div> 
        @endif
   
        @yield('content')
    </div>
   
    @yield('scripts')

</body>
</html>
