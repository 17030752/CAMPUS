<?php
// include('seguro.class.php');
// include('config.php');
// //$sitio->validar_rol(array('Usuario','Administrador'));
// $id_usuario = 1;
// $id_persona = 1;
// $data = $sitio->persona($id_usuario);
?>
<!doctype html>
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
    <script type="text/javascript" src="http://www.clubdesign.at/floatlabels.js"></script>
    <link rel="stylesheet" href="css/TimeCircles.css">
    <script src="js/TimeCircles.js"></script>
    <link rel="shortcut icon" href="img/colegio.ico">
    <title>Campus Virtual | Batería para Conductores - Bloque 2</title>
    
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
                </nav>
            </div>
        </div>
        <div class="row" align="center" style="background-color: #FFFFFF;">
            <h2 style="background-color: #FFFFFF;"><img src="img/psico.png" alt="examen" width="50" height="50"> Batería para Conductores</h2>
            <br>
            <h3 style="background-color: #FFFFFF;">Bloque 2</h3>
        </div>
        <div class="row" id="instrucciones" style="background-color: #FFFFFF;">
            <div class="col-sm-12">
                <div class="card border-success ">
                    <div class="card-header text-light" style="background-color: #0E6655;">
                        Instrucciones
                    </div>
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <p style="text-align: justify;"> El dibujo que hay aquí abajo representa una rueda
                                de un carro con muchos radios, y cada radio se distingue por una letra. En los ejercicios
                                encontrará ruedas mas pequeñas con un solo radio en cuyo centro se ha indicado una letra.
                                La tarea conciste en determinar si esta letra es la que le corresponde en la rueda grande.
                            </p>
                            <br>
                        </div>
                        <div class="text-center">
                            <img src="img/b1.png" alt="MDN" width="300" height="300">
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <p style="text-align: justify;">
                                Para contestar deberá seleccionar SI o NO, dependiendo de si la letra de ese radio corresponde
                                o no a la del radio de la rueda grande.
                                <br>
                                Vea los ejemplos de entrenamiento que vienen aquí debajo.
                            </p>
                        </div>
                        <div class="text-center">
                            <img src="img/b2.PNG" alt="MDN" width="650" height="300">
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <p style="text-align: justify;">
                                <div class="alert alert-danger text-light" role="alert">
                                    <img src="img/time.png" alt="tiempo"> Tiempo máximo: 3 minutos.
                                </div>
                            </p>
                        </div>
                        <div class="text-center d-grid gap-2">
							<a href="bateria_bloq_2.php" class="trigger-btn btn btn-primary">Iniciar</a>
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

</body>

</html>