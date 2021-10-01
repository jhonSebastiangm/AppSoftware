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
        <li><a href="AdminProyectos.html" class="nav-link">Proyectos</a></li>
        <li><a href="logout.php" class="nav-link">Cerrar Sesion</a></li>
      </div>
    </nav>

    <div class="container">
      <div class="row p-4">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <!-- FORM TO ADD TASKS -->
              <h1>Admin Company</h1>
              <form id="company-form">
                <input type="hidden" id="idCompany">
                <div class="form-group">
                  <input type="text" id="nombre" placeholder="Nombre" class="form-control" require>
                </div>
                <div class="form-group">
                  <input type="number" id="nit" placeholder="Nit" class="form-control" require>
                </div>
                <div class="form-group">
                  <input type="text" id="telefono" placeholder="Telefono" class="form-control" require>
                </div>
                <div class="form-group">
                  <input type="text" id="direccion" placeholder="Direccion" class="form-control" require>
                </div>
                <div class="form-group">
                  <input type="email" id="correo" placeholder="Correo" class="form-control" require>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Company
                </button>
              </form>
            </div>
          </div>
        </div>

        <!-- TABLE  -->
        <div class="col-md-7">
 

          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Description</td>
              </tr>
            </thead>
            <tbody id="companies"></tbody>
          </table>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <!-- Frontend Logic -->
    <script src="js/sesionAdmin.js"></script>
  </body>

</html>
