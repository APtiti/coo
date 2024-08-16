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
            <font align="center"><h1>Formulario de categoria</h1></font>
            <a class="btn btn-primary" href="{{route('categoria')}}" role="button">Lista</a>
            <form action="{{route('categoria.update',$categoria->id)}}" method="POST">
                @csrf
                {{method_field('PUT')}}
                <input type="hidden" name="_token" value={{csrf_token()}}>
                <br>
<div class="card">
<div class="card-body">
    <div class="row">
        <div class="col-lg-3 col-md->
            <label class="form-label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}}">
        </div>
    <div class="col-lg-3 col-md-3">
        <label for="form-label">Codigo</label>
    <input type="number" class="form-control" name="codigo" value="{{$categoria->codigo}}">
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3">
        <br>
        <button type="submit" class="btn btn-primary" >Guardar</button>
    </div>
    </div>
</div>
</div>
<!--<button type="submit" class="btn btn-primary form-control">Añadir</button>!-->
</form>
        </div>
    </div>
</div>
            </div>
        </div>
    </main>
</body>
</html>