<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
        <div id="contenedor" class="align-items-center">

            <hr><h1 class="text-center font-bold">Iniciar sesión</h1>
            <form class="mt-4" method="POST" action="{{ route('login.store') }}">
                @csrf
                <div style="text-align: center; ">
                <input type="email" class="border border-gray-300 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required>
                
                <br>
                @error('email')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
                @enderror
        
                <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" id="password" name="password" required>
        <br>
                @error('password')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
                @enderror
        
        <br>
                <button type="submit" class="btn btn-outline-primary">Iniciar sesión</button>
        </div><hr>
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

