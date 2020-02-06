<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/journal/bootstrap.min.css">
    <title>create</title>
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col">
            <a href="">Cerrar Sesión</a>
          </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarColor02">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">About</a>
                        </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <h3 class=" mx-0 my-3">Agregar estudiantes: </h3>
                <form action="{{url('alumnos/')}}" class="form-group" method="POST">
                    {{ csrf_field() }}
                    <label for="nombres">Nombre:</label>
                    <input type="text" name="nombres" class="form-control" value="Luis Angel">

                    <label for="apellidos">Apellidos: </label>
                    <input type="text" name="apellidos" class="form-control" value="Peralta">





                    <fieldset class="form-group">
                      <label for="sexo">Sexo: </label>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="sexo" value="Masculino">
                          Masculino
                        </label>
                      </div>
                      <div class="form-check">
                      <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="sexo" value="Femenino">
                          Femenino
                        </label>
                      </div>
                    </fieldset>
                    





                    <label for="edad">Edad: </label>
                    <input type="text" name="edad" class="form-control" value="25">

                    <label for="correo">Correo: </label>
                    <input type="email" name="correo" class="form-control" value="Luis@gmail.com">

                    <div class="d-flex justify-content-between">
                      <button class="btn btn-primary mt-3" type="submit">Registrar</button>
                      <button class="btn btn-info mt-3" onclick="location='alumnos/'">Ver lista</button>
                    </div>
                </form>
            </div>
            <div class="col-7">

            </div>
        </div>
    </div>

    
</body>
</html>