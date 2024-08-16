<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    <style>
        body {
    margin: 0; /* Elimina los márgenes predeterminados del body */
    height: 100vh; /* Asegura que el body ocupe toda la altura de la pantalla */
    background: linear-gradient(to right, #f3bac9, #8e44ad); /* Degradado de azul a morado */
}

        #contenedor {
            position: absolute;          /* Posición absoluta para centrar */
            top: 50%;                    /* Centro vertical */
            left: 50%;                   /* Centro horizontal */
            transform: translate(-50%, -50%); /* Ajuste de la posición para centrar */
            background-color: rgb(255, 255, 255);     /* Fondo blanco */
            padding: 8px;                /* Espaciado interno */
            width: 33.33%;               /* Ancho de 1/3 de la pantalla */
            border: 1px solid #e2e8f0;   /* Borde gris */
            border-radius: 8px;          /* Esquinas redondeadas */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra */
            align-items: center;         /* Centrado vertical de los elementos internos */
            justify-content: center;     /* Centrado horizontal de los elementos internos */
}

    </style>
    <body class="body">
        <div id="contenedor" class="container align-items-center">
            <hr>
            <h1 class="text-center font-bold">Registrarse</h1>
        
            <form class="mt-4" method="POST" action="{{ route('register.store') }}">
                @csrf
        
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control border border-gray-200 rounded-md bg-gray-200 text-lg placeholder-gray-900 p-2 focus:bg-white" placeholder="Nombre" id="name" name="name">
                        @error('name')
                            <p class="border border-red-500 rounded-md bg-red-100 text-red-600 p-2 my-2">* {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control border border-gray-200 rounded-md bg-gray-200 text-lg placeholder-gray-900 p-2 focus:bg-white" placeholder="Email" id="email" name="email">
                        @error('email')
                            <p class="border border-red-500 rounded-md bg-red-100 text-red-600 p-2 my-2">* {{ $message }}</p>
                        @enderror
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="password" class="form-control border border-gray-200 rounded-md bg-gray-200 text-lg placeholder-gray-900 p-2 focus:bg-white" placeholder="Contraseña" id="password" name="password">
                        @error('password')
                            <p class="border border-red-500 rounded-md bg-red-100 text-red-600 p-2 my-2">* {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="password" class="form-control border border-gray-200 rounded-md bg-gray-200 text-lg placeholder-gray-900 p-2 focus:bg-white" placeholder="Confirma tu contraseña" id="password_confirmation" name="password_confirmation">
                    </div>
                </div>
        
                <div class="row mb-3">
                    <div class="d-flex">
                        <select class="form-select" name="id_rol" id="id_rol">
                            @foreach ($roles as $rol)
                                <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                            @endforeach
                        </select>
                        @error('id_rol')
                            <p class="border border-red-500 rounded-md bg-red-100 text-red-600 p-2 my-2">* {{ $message }}</p>
                        @enderror
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-outline-primary w-100 text-lg font-semibold p-2 my-3">Registrarse</button>
                    </div>
                </div>
            </form>
        </div>
        


        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

