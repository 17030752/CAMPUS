<?php
/*include('seguro.class.php');
include('config.php');
//$sitio->validar_rol(array('Usuario','Administrador'));
$id_usuario = 1;
$id_persona = 1;
$data = $sitio->persona($id_usuario);*/
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap2.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/floatlabels.js/1.0.0/floatlabels.js" integrity="sha512-0cpfsDBCWhRxjGzHcT2m33YCGUoTpkgMkGJqkYBgNBT7KxiyxpoF9QY6VvsmTIX2kuy6aehE0Jv1PpCqvNwuyA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="shortcut icon" href="img/colegio.ico">
    <title>Campus Virtual | Batería para Conductores - Bloque 1</title>

    <style>
        body  {
            background-image: url("img/smarts.png");
            background-repeat: repeat;
            background-position: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row" style="background-color: #FFFFFF;">
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
									<a class="dropdown-item" href="index_campus_empleado.php"><img src="img/home.png" alt="inicio"> Página Principal</a>
									<a class="dropdown-item" href="#modalSalir" class="trigger-btn btn btn-primary" data-toggle="modal"><img src="img/logout.png" alt="logout"> Cerrar Sesión</a>
								</div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row" align="center" style="background-color: #FFFFFF;">
            <h2 style="background-color: #FFFFFF;"><img src="img/psico.png" alt="examen" width="50" height="50"> Batería para Conductores</h2>
            <br>
            <h3 style="background-color: #FFFFFF;">Bloque 1</h3>
        </div>
        <div class="row" style="background-color: #FFFFFF;">
            <div class="col-sm-12">
                <div class="card border-success">
                    <div class="card-header text-light" style="background-color: #0E6655;">
                        Instrucciones
                    </div>
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <p style="text-align: justify;"> Con esta prueba usted podrá mostrar su capacidad para
                                resolver
                                unos cuantos ejercicios con palabras, números y dibujos. Señale sus respuestas en la
                                forma que
                                se indica a continuación.
                            </p>
                            <br>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <p style="text-align: justify;">
                                Cada ejercicio va seguido de cuatro posibles respuestas, y delante de éstas las
                                letras A, B, C, D.
                                En primer lugar, lea con atención el ejercicio y luego mire las respuestas que se
                                dan; entre ellas
                                hay siempre una, y solamente una, que es la correcta. Cuando descubra cúal es,
                                fíjese en la letra
                                que tiene delante y seleccione esa misma letra.
                            </p>
                        </div>
                        <div class="align-items-center justify-content-between mb-4">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    E1. Para seguir con el orden en que estan colocados, ¿qué número pondria a continuación?
                                    </br>
                                    2  4  6  8  ...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios1" value="option1" disabled>
                                        <label class="form-check-label" for="exampleRadios1">A. 7</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios2" value="option2" disabled>
                                        <label class="form-check-label" for="exampleRadios2">B. 8</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios3" value="option3" disabled>
                                        <label class="form-check-label" for="exampleRadios3">C. 10</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios4" value="option4" disabled>
                                        <label class="form-check-label" for="exampleRadios3">D. 9</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <p style="text-align: justify;">
                                La respuesta correcta es la C, porque 10 es el número que continuaría el orden.
                            </p>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <p style="text-align: justify;">
                                <div class="alert alert-danger text-light" role="alert">
                                    <img src="img/time.png" alt="tiempo"> Tiempo máximo: 15 minutos.
                                </div>
                            </p>
                        </div>
                        <div class="text-center d-grid gap-2">
							<a href="bateria_bloq_1.php" class="trigger-btn btn btn-primary">Iniciar</a>
							</br>
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
        indice_marcado = 0
        function deshabilitar(formulario,idradio){
            formulario.miradio[indice_marcado].checked = true
            formulario.miradio[idradio].blur()
        }
    </script>
</body>

</html>