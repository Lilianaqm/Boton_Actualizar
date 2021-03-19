<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/shards-ui@latest/dist/css/shards.min.css">
    <link rel="stylesheet" href="css/parvati.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <title>Actualizar estudiantes</title>
    </head>
<body>
<section class="vh-100 bg-img d-flex justify-content-center align-items-center text-dark">
      <div class="col-3 bg-glass-06 blur p-0 rounded shadow d-flex animated fadeIn">
        <div class="bg-glass-06 rounded-left p-2">
    <div clas="container">
        <div class="row">
            <div class="col">
        <h2>Actualizar estudiantes</h2>
        <form method="post" action="{{route ('Lista.update' ,$estudiante)}}" >
    @method('PATCH')
        <div class="form-group">
        <input type="text" name="Matricula" class="form-control" placeholder="Matricula" value="{{$estudiante->Matricula}}">
        </div>
        <div class="form-group">
        <input type="text" name="Nombre" class="form-control"placeholder="Nombre" value="{{$estudiante->Nombre}}">
        </div>
        <div class="form-group">
        <input type="text" name="Direccion" class="form-control"placeholder="Dirección" value="{{$estudiante->Direccion}}"></textarea>
        </div>
            <div class="form-group">
                <input type="submit" value="Actualizar" class="btn btn-success">
            {{ csrf_field() }}
        </div>
    </form>
        </div>
        </div>
        </div>
    </body>
</html>
