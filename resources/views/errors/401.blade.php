<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Acceso Restringido</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
	<br>
	<div class="box-admin">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<div class="panel-title">Acceso Restringido</div>
				</div>
				<div class="panel-body">
				    <!-- https://www.iconfinder.com/ -->
					<img class="img-responsive center-block" src="{{ asset('img/error_access.png') }}">
					<hr>
					<strong class="text-center">
						<p class="text-center">Usted no tiene acceso a esta zona</p>
						<p>
							<a href="{{ route('front.index') }}">¿Deseas volver al inicio?</a>
						</p>
					</strong>
				</div>
			</div>
		</div>
	</div>
</body>
</html>