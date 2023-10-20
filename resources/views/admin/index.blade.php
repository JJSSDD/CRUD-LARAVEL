<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Inicio</title>
  </head>
  <body>
    <div class="text-center">
    <a onclick="return csesion()" href="{{route('login.logout')}}"><button class="btn btn-dark text-center m-3"><b style="font-size: 25px;">Cerrar Sesión</b></button></a>
  </div>

    <h1 class="font-weight-bold text-center">Bienvenido a tu interfaz de organizador.</h1>
    <div class="">        
        <div class="table-responsive w-50" style="margin-left: 450px">
            <a href="/creacion"><button>Registrar equipo</button></a>
            <table class="table table-striped" id="equipos">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nombre</th>
                        <th>region</th>
                        <th>no integrantes</th>
                        <th>fecha creacion</th>
                       
                    </tr>
                    
                </thead>
                <tbody class="w-50">
                    
                </tbody>
            </table>
        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#equipos', {
    ajax: '{{route("datatable.equipo")}}',
    columns: [
        { data: 'id' },
        { data: 'nombre' },
        { data: 'region' },
        { data: 'n_integrantes' },
        { data: 'f_creacion' },
       
    ],
    "lengthMenu": [[5], [5]],
  "language": {
    "lengthMenu": "",
    "zeroRecords": "No existe!",
    "info": "Mostrando la página PAGE de PAGES",
    "infoEmpty": "No hay registros disponibles",
    "infoFiltered": "(Filtrado de MAX registros totales)",
    "search": "Buscar:",
    "paginate": {
      "next": "Siguiente",
      "previous": "Anterior"
    }
  }
});
    </script>
  </body>
</html>