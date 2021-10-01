<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>App Software</title>
    <!-- BOOTSTRAP 4  -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
  </head>
  <body>

    <!-- NAVIGATION  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">App Software</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li><a href="UserTickets.html" class="nav-link">Tickets</a></li>
        <li><a href="logout.php" class="nav-link">Cerrar Sesion</a></li>
      </div>
    </nav>

    <div class="container">
      <div class="row p-4">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <!-- FORM TO ADD TASKS -->
              <h1>Admin Hu</h1>
              <form id="hu-form">
                <input type="hidden" id="idHu">
                <div class="form-group">
                  <input type="text" id="nombre" placeholder="Nombre" class="form-control" require>
                </div>
                <div class="form-group">
                <select class="form-control input-lg" id="Select" require>
                </select>
                </div>

                <h1>Info Ticket</h1>
                <div class="form-group">
                  <input type="text" id="comentario" placeholder="Comentario" class="form-control" require>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Hu
                </button>
              </form>
            </div>
          </div>
        </div>

        <!-- TABLE  -->
        <div class="col-md-7">
        <div class="form-group">
                <select class="form-control input-lg" id="Select2">
                </select>
        </div>

          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Proyecto</td>
              </tr>
            </thead>
            <tbody id="hus"></tbody>
          </table>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <!-- Frontend Logic -->
    <script src="js/sesion.js"></script>
  </body>

</html>
