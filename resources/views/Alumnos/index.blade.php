<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/journal/bootstrap.min.css">
    <title>Lista</title>
</head>
<body>
    <style>
        .td{
            background-color: white;
        }
    </style>
    <div class="container">
        <div class="row">

          <div class="col d-flex justify-content-end">
            <a href="" class="">Cerrar Sesión</a>
          </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-1 pr-1" style="background-color:black; color:reds">
                    <a class="navbar-brand" href="#">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarColor02">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Pagos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Asistencia</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Notas</a>
                        </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-2" type="text" placeholder="Buscar">
                        <button class="btn btn-secondary " type="submit">Buscar</button>
                      </form>
                    </div>
                  </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-between">
                  <h3 class="mx-0 my-3">Alumnos Registrados: </h3>
                  <button class="btn btn-success my-2 mx-0" onclick="location='alumnos/create'"> <b>+</b> Agregar</button>
                </div>
                <table class="table table-hover table-bordered table-striped" >
                    <thead>
                      <tr style="background-color:black; color:white">
                        <th scope="col">Nro</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($alumnos as $alumno)
                      <tr class="td">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $alumno->nombres }}</td>
                        <td>{{ $alumno->apellidos }}</td>
                        <td>{{ $alumno->sexo }}</td>
                        <td>{{ $alumno->edad }} años</td>
                        <td>{{ $alumno->correo }}</td>

                        <td style="text-align: center;">
                            <form method="post" action="{{ url('/alumnos/'.$alumno->id) }}">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                                <input type="button" value="Detaller" class="btn btn-outline-success">
                                <input type="button" value="Editar" class="btn btn-outline-info">
                                <button onclick="return confirm('Eliminar a ');" type="submit" class="btn btn-outline-primary" >Eliminar</button>
                            </form>
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table> 
            </div>
        </div>
    
</body>
</html>