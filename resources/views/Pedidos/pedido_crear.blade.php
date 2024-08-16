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
            <font align="center"><h1>Formulario de pedido</h1></font>
            <a class="btn btn-primary" href="{{route('pedido')}}" role="button">Lista</a>
            <form action="{{route('pedido.store')}}" method="POST">
                @csrf
                <input type="hidden" name="_token" value={{csrf_token()}}>
                <br>
<div class="card">
<div class="card-body">
    <div class="row">
        <div class="col-lg-2 col-md->
            <label class="form-label>Fecha</label>
            <input type="date" name="fecha" class="form-control">
        </div>



  <div class="col-lg-2 col-md->
        <label class="form-label">Producto</label>
        <select class="form-select" name="pid_producto" id="pid_producto" aria-label="Default select example">
            
            @foreach($productos as $producto)
                <option value="{{$producto->id}}"> {{$producto->nombre}} </option>
            @endforeach
        </select>
    </div>


    <div class="col-lg-2 col-md-2">
        <label for="form-label">Cantidad</label>
    <input type="number" class="form-control" name="pcantidad"  id="pcantidad">
    </div>

    <div class="col-lg-2 col-md-2">
        <label for="form-label">Precio</label>
    <input type="number" class="form-control" name="pprecio"  id="pprecio">
    </div>



    <div class="col-lg-2 col-md-2">
        <label for="form-label">Nota</label>
    <input type="text" class="form-control" name="nota" id="nota">
    </div>

    <div class="col-lg-2 col-md-3 col-sm-2">
        <br>
        <button type="button" id="bt_agregar" class="btn btn-primary" >Agregar</button>
    </div>
 
<div>
    <br>
    <hr>
    <table class="table" id="tabla">
        <thead class="table table-primary table-bordered border-primary">
            <th>Opciones</th>
            <th>producto</th>
            <th>cantidad</th>
            <th>precio</th>
            <th>Total</th>
            <th>Monto Acumulado</th>

        </thead>
        <tbody id="tabla_body">
           
        </tbody>
      </table>
    </div>
    <!--
    <div class="col-lg-3 col-md-3">
        <label for="form-label">Subtotal</label>
    <input type="number" class="form-control" name="subtotal">
    </div>-->
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


<script>
    // evento llamar a la funcion agregar
    $(document).ready(function(){
        $('#bt_agregar').click(function(){
             agregar();
        });
    }); 

    var cont=0;
    var subtotal= 0;



    function agregar(){
      var id_producto=$("#pid_producto").val(); //select 
     // var cantidad=5;
      var cantidad=$("#pcantidad").val();
      //var precio=10;
      var precio=$("#pprecio").val();

      var nombre=$("#pid_producto option:selected").text();

      if(cantidad!="" && cantidad>0 && precio!="" && precio>0){

        subtotal=  subtotal+(precio*cantidad);
     

        var fila=  '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger" onclick="eliminar('+cont+')">X</td><td><input type="hidden" name="id_producto[]" value="'+id_producto+'">'+nombre+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="number" name="precio[]" value="'+precio+'"></td><td>'+precio*cantidad+'<input type="hidden" name="subtotal" value="'+subtotal+'"></td><td>'+subtotal+'</td></tr>';
            cont++;
            $('#tabla_body').append(fila);

      }else{
        alert("Por favor rellenar los campos")
      }
    }

    function eliminar(pos){
        $("#fila"+pos).remove();
     

    }
 </script>   
</html>