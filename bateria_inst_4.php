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
    <title>Campus Virtual | Batería para Conductores - Bloque 4</title>
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
            <h3 style="background-color: #FFFFFF;">Bloque 4</h3>
        </div>
        <div class="row" style="background-color: #FFFFFF;">
            <div class="col-sm-12">
                <div class="card border-secondary">
                    <div class="card-header text-light" style="background-color: #0E6655;">
                        Instrucciones
                    </div>
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <p style="text-align: justify;"> A continuación, encontrara una serie de enunciados
                                relacionados con situaciones de tráfico y formas de conducir. No se trata de un
                                examen
                                de conducir ni hay contestaciones correctas e incorrectas. Cada uno piensa y actúa
                                como
                                cree conveniente o de acuerdo con su modo de ser.
                            </p>
                            <br>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <p style="text-align: justify;">
                                Su tarea consiste en leer cada uno de los enunciados y luego escoger una de las
                                alternativas
                                que se presentan a continuación. Aunque pudiera dar más de una respuesta, o
                                aunque ninguna de las que se proponen se ajuste totalmente en su caso. RECUERDE QUE
                                SIEMPRE
                                TIENE QUE ELEGIR UNA (Y SOLAMENTE UNA). Piense cuál de ellas es la que corresponde
                                mejor a su forma de ser
                                o de actuar. Fijese en la letra que tiene delante seleccione su respuesta.
                            </p>
                        </div>
                        <div class="text-center d-grid gap-2">
							<a href="bateria_bloq_4.php" class="trigger-btn btn btn-primary">Siguiente</a>
							</br>
						</div>
                    </div>
                </div>
                </br>
                </br>
                </br>
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