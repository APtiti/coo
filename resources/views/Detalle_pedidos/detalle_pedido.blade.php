<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <font align="center"><h1>Detalle Pedidos</h1></font>
            <form method="POST">
                <br>
<div class="card">
<div class="card-body">
    <div class="row">
    <div class="col-3 col-mb-3 col-sm-3">
        <label for="exampleInputEmail1">Nombre</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3">
        <label for="exampleInputEmail1">Codigo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1">
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3">
        <br>
        <button type="button" id="bt_agregar" class="btn btn-primary" >Agregar</button>
    </div>
    <div>
        <br>
    <table class="table">
        <thead class="table-primary table-bordered border-primary">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Codigo</th>
            </tr>
       </thead>
        <tbody id="tabla_body">

       </tbody>
    </table>
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
    </div>
</div>
</div>

<main>

</main>
</body>
</html>