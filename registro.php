
<!DOCTYPE html>
<html>
    
<head>
	<title>App Software</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<!--Coded with love by Mutiullah Samim-->
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form id="RegistrarUsuario">
			<h2>Por favor regístrese <small>Es gratis y siempre lo será.</small></h2>
			<hr class="colorgraph">
            <div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Usuario Email" tabindex="1">
			</div>
            <div class="form-group">
            <select class="form-control input-lg" id="Select">
            </select>
			</div>
            
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="2">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="3">
					</div>
				</div>
			</div>

			
			<hr class="colorgraph">
			<div class="row">
			<div id="Resultados"></div>
				<div class="col-xs-12 col-md-6"><input type="submit" value="Registrarse" class="btn btn-primary btn-block btn-lg" tabindex="4"></div>
				<div class="col-xs-12 col-md-6"><a href="index.php" class="btn btn-success btn-block btn-lg">Entrar</a></div>
			</div>
		</form>
	</div>
</div>
<!-- Modal -->

</div>
<script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
<script src="js/registro.js"></script>
</body>
</html>
