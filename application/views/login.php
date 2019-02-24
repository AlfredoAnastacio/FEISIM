<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sistema Interactivo de Mensajes</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/png" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
</head>
<body>
	<img src="assets/images/coatli2.png" alt="imagen_fondo" id="backlogo">
	<div class="container">
		<div class="row justify-container-lg-center">
			<div class="col-lg-6">
				<form action="" method="post">
					<div class="panel">
						<div class="panel-heading panelH">
							<h1 class="panel-title" style="text-align:center">Inicio de sesión</h1>
						</div>
						<div class="panel-body panelB">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" name="username" id="username" placeholder="Ingrese un usuario" autofocus>
							</div><br>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control" name="password" id="password" placeholder="Ingrese una contraseña">
							</div><br>
							<button type="submit" value="Entrar" class="btn btn-warning btn-md btn-block">INGRESAR</button>
						</div>
                	</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
