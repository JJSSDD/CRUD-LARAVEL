<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <h1>Registra tu equipo</h1>
    <div class="text-center">
        <h1 class="font-weight-bold btn-outline-primary">REGISTRO</h1>
        <p class="font-weight-bold">Formulario de registro de equipos de lolsito</p>
        <form method="post" action="{{ route('equipo.created') }}">
            @csrf
            <label class="font-weight-bold" for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <label class="font-weight-bold" for="region">Region</label>
            <input type="text" name="region" id="region">
            <label class="font-weight-bold" for="n_integrantes">n_integrantes</label>
            <input type="text" name="n_integrantes" id="n_integrantes"><br>
            <label class="font-weight-bold" for="f_creacion">f_creacion</label>
            <input type="date" name="f_creacion" id="f_creacion"><br>
            <button type="submit" class="btn btn-outline-primary m-3 font-weight-bold">Registrarse</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
