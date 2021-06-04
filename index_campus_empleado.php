<?php
/*include('seguro.class.php');
include('config.php');
$id_usuario = $_SESSION['id_usuario'];
$id_persona = $_SESSION['id_persona'];
$id_direccion = $_SESSION['id_direccion'];
$data = $sitio->persona($id_usuario);
$dato = $sitio->progreso($id_usuario);

ob_start();*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap2.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/floatlabels.js/1.0.0/floatlabels.js" integrity="sha512-0cpfsDBCWhRxjGzHcT2m33YCGUoTpkgMkGJqkYBgNBT7KxiyxpoF9QY6VvsmTIX2kuy6aehE0Jv1PpCqvNwuyA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<nav class="navbar navbar-expand navbar-dark bg-dark" id="barra">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="img/celaya.png" alt="" width="35" height="40">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarColor01" style="margin-right: 10px;">
                        <ul class="navbar-nav ml-auto" style="font-size: 17px;">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#"><img src="img/home.png" alt="inicio"> Inicio</a>
                                    <a class="dropdown-item" href="#modalSalir" class="trigger-btn btn btn-primary" data-toggle="modal"><img src="img/logout.png" alt="logout"> Cerrar Sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
			</div>
		</div>
		</br>
		<div class="row">
			<div class="col-sm-12">
				<div class="card border-info">
					<div class="card-header text-white bg-info">
						<img src="img/informacion.png" alt="info"> Tu información
					</div>
					<div class="card-body">
						<form method="POST" enctype="multipart/form-data">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Nombre/s</label>
									<input type="text" class="form-control" placeholder="Nombre/s" readonly name="nombre" value="<?php //echo $data['nombre']; ?>">
								</div>
								<div class="form-group col-md-6">
									<label for="inputPassword4">Apellidos</label>
									<input type="text" class="form-control" placeholder="Apellidos" readonly name="apellidos" value="<?php //echo $data['apellido']; ?>">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12">
									<label>Dirección</label>
									<input type="text" class="form-control" placeholder="Dirección" readonly name="direccion" value="<?php //echo $data['descripcion']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label>Progreso</label>
								<div class="progress">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $dato['avance']; ?>%">
										<?php //echo $dato['avance']; ?>%
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<hr class="my-4">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card border-success">
					<div class="card-header text-light bg-success">
						<img src="img/historial.png" alt="histirial"> Historico
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-fill" id="dataTable" width="100%" cellspacing="0">
								<?php
								/*$i = 1;
								$personal = $sitio->listarExamenRealizado($id_persona);
								echo "<thead class='thead-dark'>";
								echo "<tr>";
								echo "<th>#</th>";
								echo "<th>Test</th>";
								echo "<th>Fecha</th>";
								echo "</tr>";
								echo "</thead>";
								foreach ($personal as $clave => $personas) {
									echo "<tbody class='table-hover'>";
									echo "<tr>";
									echo "<td>" . $i++ . "</td>";
									echo "<td>" . $personas['examen'] . "</td>";
									echo "<td>" . $personas['fecha'] . "</td>";
									echo "</tr>";
								}
								echo "</tbody>";*/
								?>
							</table>
						</div>
					</div>
				</div>
				<hr class="my-4">
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="card border-primary">
					<div class="card-header text-light bg-primary">
						<img src="img/test.png" alt="test"> Tests
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-4 col-md-3 iconApp text-center">
								<a href="bateria_inst_1.php" class="thumbnail">
									<img src="img/psico.png" alt="examen" width="50" height="50"></img>
									<div class="caption">
										<p class="text-center">Batería para Conductores</p>
									</div>
								</a>
							</div>
							<div class="col-sm-4 col-md-3 iconApp text-center">
								<a href="test_habitos.php" class="thumbnail">
									<img src="img/nutricion.png" alt="examen" width="50" height="50"></img>
									<div class="caption">
										<p class="text-center">Hábitos Alimenticios</p>
									</div>
								</a>
							</div>
							<div class="col-sm-4 col-md-3 iconApp text-center">
								<a href="#" class="thumbnail">
									<img src="img/psico.png" alt="examen" width="50" height="50"></img>
									<div class="caption">
										<p class="text-center">Norma035 Tomo I </p>
									</div>
								</a>
							</div>
							<div class="col-sm-4 col-md-3 iconApp text-center">
								<a href="#" class="thumbnail">
									<img src="img/psico.png" alt="examen" width="50" height="50"></img>
									<div class="caption">
										<p class="text-center">Norma035 Tomo II</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<hr class="my-4">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card border-danger">
					<div class="card-header text-light bg-danger">
						<img src="img/business-report.png" alt="dashboard"> Dashboard / Estadisticas
					</div>
					<div class="card-body">
						<div class="row">
							<div class="text-center d-grid gap-2">
								<a href="#modalDash" class="trigger-btn btn btn-primary" data-toggle="modal">¿Qué es un Dashboard?</a>
								</br>
							</div>

							<div class="col-sm-4 col-md-3 iconApp text-center">
								<a href="tipo_conductores.php" class="thumbnail">
									<img src="img/empleados.png" alt="examen" width="50" height="50"></img>
									<div class="caption">
										<p class="text-center">Empleados</p>
									</div>
								</a>
							</div>
							<div class="col-sm-4 col-md-3 iconApp text-center">
								<a href="accidentes.php" class="thumbnail">
									<img src="img/accidente.png" alt="examen" width="50" height="50"></img>
									<div class="caption">
										<p class="text-center">Accidentes</p>
									</div>
								</a>
							</div>
							<div class="col-sm-4 col-md-3 iconApp text-center">
								<a href="#" class="thumbnail">
									<img src="img/psico.png" alt="examen" width="50" height="50"></img>
									<div class="caption">
										<p class="text-center">Tests</p>
									</div>
								</a>
							</div>
							<div class="col-sm-4 col-md-3 iconApp text-center">
								<a href="#" class="thumbnail">
									<img src="img/psico.png" alt="examen" width="50" height="50"></img>
									<div class="caption">
										<p class="text-center">Otro</p>
									</div>
								</a>
							</div>
							<br>
							<div class="col-sm-4 col-md-3 iconApp text-center">
								<a href="estadisticas_bateria.php" class="thumbnail">
									<img src="img/psico.png" alt="examen" width="50" height="50"></img>
									<div class="caption">
										<p class="text-center">Estadisticas / Batería para Conductores</p>
									</div>
								</a>
							</div>
							<div class="col-sm-4 col-md-3 iconApp text-center">
								<a href="estadisticas_habitos.php" class="thumbnail">
									<img src="img/nutricion.png" alt="examen" width="50" height="50"></img>
									<div class="caption">
										<p class="text-center">Estadisticas / Hábitos Alimenticios</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<hr class="my-4">
			</div>
		</div>

		<div class="row text-light" id="pie" style="background-color: #241284;">
			<div class="col-sm-12" align="center">
				<h4 class="text-light">Coordinación de Seguros</h4>
				<ul class="list-unstyled ">
					<li class="text-light">Gestión de Seguridad Vial</li>
				</ul>
			</div>
		</div>
	</div>


	<!-- Modal HTML -->
	<div id="myModal" class="modal fade">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">¡Bienvenido!</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="img/cerrar.png" alt="cerrar"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xl-6 col-md-6 mb-6">
							<div class="d-sm-flex align-items-center justify-content-between mb-4">
								<h1 class="h4 mb-0 text-gray-800">¿Qué esperar de un campus virtual?</h1>
							</div>
							<div class="d-sm-flex align-items-center justify-content-between">
								<p style="text-align: justify;"> El campus virtual es una plataforma online de educación,
									realizada y brindada por instituciones académicas, aunque también es un sistema utilizado por
									instituciones u organizaciones que no son de naturaleza educativa que necesitan ofrecer cursos
									virtuales sobre temas que las atraviesan. En el interior de la plataforma podrás encontrar pruebas
									de distintos ambitos.
								</p>
								<br>
							</div>
							<div class="d-sm-flex align-items-center justify-content-between mb-4">
								<p style="text-align: justify;">
									El campus virtual forma parte de seguridad vial perteneciente a la Coordinación de Seguros.
								</p>
							</div>
						</div>
						<div class="col-xl-6 col-md-6 mb-6" align="center">
							<img src="img/logo.png" alt="campus" height="350" width="350" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal HTML -->
	<div id="modalDash" class="modal fade">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">¿Qué es un Dashboard?</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="img/cerrar.png" alt="cerrar"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xl-6 col-md-6 mb-6">
							<div class="d-sm-flex align-items-center justify-content-between">
								<p style="text-align: justify;"> Un dashboard o cuadro de mando es una herramienta de
									inteligencia de negocios
									que representan los KPI’s (Indicador clave de rendimiento) o métricas que afectan en
									el logro de los objetivos de una
									estrategia. En él, podemos visualizar de forma ordenada y en base a la selección de
									parámetros e
									indicadores que interese monitorizar, el estado del negocio o de un proyecto.
								</p>
								<br>
							</div>
							<div class="d-sm-flex align-items-center justify-content-between mb-4">
								<p style="text-align: justify;">
									Un dashboard puede indicarnos que tenemos un problema o que todo o algo marcha muy
									bien. Nos presentará
									un hecho, que nos llevará a un origen global, no particular, que nos pondrá
									en alerta para, posteriormente, poder llegar al origen último y tomar medidas
									correctoras, si fuera
									el caso, o potenciarlo, si el hecho que se nos ha presentado fuera positivo.
								</p>
							</div>
						</div>
						<div class="col-xl-6 col-md-6 mb-6">
							<img src="img/dashboard.png" alt="campus" height="300" width="550" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Logout Modal-->
	<div class="modal fade" id="modalSalir" tabindex="-1" role="dialog" aria-labelledby="modalSalir" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalSalir">Cerrar Sesión</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">¿Estas seguro de finalizar la sesión?</div>
				<div class="modal-footer">
					<button class="btn btn-info" type="button" data-dismiss="modal">Cancelar</button>
					<a class="btn btn-primary" href="log_out.php">Salir</a>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('#myModal').modal('toggle')
		});
	</script>
</body>
</html>