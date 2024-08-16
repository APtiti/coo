<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2713879efc.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
      
    <main class="col ps-md-2 pt-2">
        <div class="row">
            <div class="col-12">
            <div class="container">
    <div class="row">
        <div class="col col-md-12 col-sm-12 justify-content-center">
            <font align="center"><h1>Ver Producto</h1></font>
                @csrf
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="mb-3">
                    <label class="form-label">Nombre: <strong>{{$producto->nombre}}</strong></label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Sabor: <strong>{{$producto->sabor}}</strong></label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto: <strong>{{$producto->foto}}</strong></label>
                </div>
                <a class="btn btn-primary" href="{{route('producto')}}" role="button">Volver</a>
        </div>
    </div>
</div>
            </div>
        </div>
    </main>
</body>
</html>