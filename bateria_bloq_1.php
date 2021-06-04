<?php
// include('seguro.class.php');
// include('config.php');
// $id_usuario = $_SESSION['id_usuario'];
// 	$id_persona = $_SESSION['id_persona'];
// 	$id_direccion = $_SESSION['id_direccion'];
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/floatlabels.js/1.0.0/floatlabels.js" integrity="sha512-0cpfsDBCWhRxjGzHcT2m33YCGUoTpkgMkGJqkYBgNBT7KxiyxpoF9QY6VvsmTIX2kuy6aehE0Jv1PpCqvNwuyA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="shortcut icon" href="img/colegio.ico">
    <title>Campus Virtual | Batería para Conductores - Bloque 1</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand navbar-dark bg-dark" id="barra">
                <div class="container">
						<a class="navbar-brand" href="#">
						<img src="img/celaya.PNG" alt="" width="35" height="40">
						</a>
					</div>
                </nav>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-sm-12" align="center">
                <h2><img src="img/psico.PNG" alt="examen" width="50" height="50"> Batería para Conductores - Bloque 1</h2>
                <hr class="my-4">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form class="col-sm-12" name="bloque1">
                    <div class="row row-cols-1 row-cols-md-1 g-4">
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style=" background-color: #95B5AF;">
                                    1. Ordene las palabras que vienen a continuación y busque la que falta para que
                                    tengan un sentido: En circulan los España automoviles por la...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. Cuneta</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. Izquierda</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                        <label class="form-check-label" for="respuesta3">C. Derecha</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                        <label class="form-check-label" for="respuesta4">D. Acera</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    2. Para seguir el orden en que estan colocados, ¿Que numero pondria a
                                    continuacion?</br>
                                    5 6 9 10 13 14
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. 16</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B.15</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. 18</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. 17</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 20rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    3. Para hacer completo el modelo que pieza sobra
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B.</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. </label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. </label>
                                    </div>
                                    <div class="text-center">
                                        <img src="img/p3.PNG" alt="MDN">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    4. Para seguir el orden en que estan colocados, ¿Que letra pondria a
                                    continuacion?
                                    </br>
                                    a b a b a ..
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. a</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. b</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. c</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. d</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 20rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    5. ¿Que recipiente tiene la escala de medida correctamente marcada?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. A</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B.B</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. C</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. No se sabe</label>
                                    </div>
                                    <div class="text-center">
                                        <img src="img/p5.PNG" alt="MDN">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    6. BARCO es a TIMON, como AUTOMOVIL es a...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Volante</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Embrage</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Motor</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Acelerador</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    7. Para seguir el orden en que estan colocadas, ¿Que letra pondria a
                                    continuacion?
                                    </br>
                                    a b b a c c a ...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. a</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. b</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. c</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. d</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 20rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    8. ¿Que trozo de cadena es mas necesario para que se sostengan los 50 kg?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. 1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. 2</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. 3</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios4">D. Todos igual</label>
                                    </div>
                                    <div class="text-center">
                                        <img src="img/p8.PNG" alt="MDN">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    9. LOCOMOTORA es a VAGON, como CAMION es a ...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Cabina</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Transporte</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Remolque</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Eje</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 20rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    10. ¿Que rodillo gira en direccion contraria al rodillo X?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. A</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. B</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. C</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. D</label>
                                    </div>
                                    <div class="text-center">
                                        <img src="img/p10.PNG" alt="MDN">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 20rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    11. Para seguir el orden de los dibujos de la izquierda, ¿Cuál de los dos están a la derecha pondría en el lugar vacio?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta11" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. A</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta11" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. B</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta11" id="respuesta3" value="option3">
                                        <label class="form-check-label" for="respuesta3">C. C</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta11" id="respuesta4" value="option4">
                                        <label class="form-check-label" for="respuesta4">D. D</label>
                                    </div>
                                    <div class="text-center">
                                        <img src="img/p11.PNG" alt="MDN">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    12. ¿Cuál de las siguientes palabras significa lo mismo que APOCADO?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta12" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Ficticio</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta12" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Tímido</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta12" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Valioso</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta12" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Alfabético</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 23rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    13. ¿Cómo quedarían el aceite y el agua despues de haberlos mezclado y agitado?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta13" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Dibujo A</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta13" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Dibujo B</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta13" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Dibujo C </label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta13" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. No se puede saber </label>
                                    </div>
                                    <div class="text-center">
                                        <img src="img/p13.PNG" alt="MDN">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 20rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    14. Si la flecha continuase su camino, ¿a que punto tocaría?

                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta14" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. A</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta14" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. B</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta14" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. C</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta14" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. D</label>
                                    </div>
                                    <div class="text-center">
                                        <img src="img/p14.PNG" alt="MDN">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    15. En las calles de una ciudad, los números pares de las casas están a la derecha, y los impares a la izquierda. Si usted está perpendicularmente en una calle, enfrente ve una casa con el número 22, y desea ir al número 38, entonces, deberá:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta15" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Torcer a la derecha</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta15" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B.Conocer dónde comienza la calle</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta15" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Conocer la longitud de la calle </label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta15" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Torcer a izquierda</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    16. Un aprendiz recibe cada día 12 euros, y se gasta 5 euros diarios. Al cabo de cúantos días habrá ahorrado 42 euros?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta16" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. 7 días</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta16" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. 5 días</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta16" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. 6 días</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta16" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. 4 días</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 20rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    17. Si la flecha continuase su camino, ¿a qué punto tocaría?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta17" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. A</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta17" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B.B</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta17" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. C</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta17" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. D</label>
                                    </div>
                                    <div class="text-center">
                                        <img src="img/p17.PNG" alt="MDN">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    18. MARTILLO es a CLAVO como LLAVE INGLESA es a:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta18" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Remache</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta18" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B.Alicate</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta18" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Tuerca</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta18" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios4">D.Enchufe
                                            igual</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    19. Para seguir el orden en que están colocadas, ¿Qué letra pondría a continuación?
                                    </br>
                                    x y a x y c x y e x y g x y ....
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta19" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. K</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta19" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. h</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta19" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. i</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta19" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. j</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    20. Las tres cuartas partes del dinero de Juan son 66 euro, ¿Cúanto dinero tiene Juan?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta20" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. 99 euros</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta20" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B.90 euros</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta20" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. 88 euros</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta20" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. 80 euros</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 23rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    21. Si las cajas son iguales en volumen y peso, y las cadenas de igual resistencia, ¿en cuál es más probable que se rompan las cadenas?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta21" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. En el caso A</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta21" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. En el caso B</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta21" id="respuesta3" value="option3">
                                        <label class="form-check-label" for="respuesta3">C. En ambos a la vez</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta21" id="respuesta4" value="option4">
                                        <label class="form-check-label" for="respuesta4">D. No se puede saber</label>
                                    </div>
                                    <div class="text-center">
                                        <img src="img/p21.PNG" alt="MDN" width="320" height="150">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    22. En un viaje de 135 kilómetros de distancia se puede lograr una media de 54 km/hr. Si se sale a las diez de la mañana ¿A qué hora se llegara?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta22" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. 11:30 horas</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta22" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. 12:45 horas</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta22" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. 12:30 horas</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta22" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. 11:45 horas</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    23. Para seguir el orden en que están colocadas, ¿qué letra pondría a continuación?
                                    </br>
                                    a b a b h i c d c d h i e f ...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta23" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. d </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta23" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. e</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta23" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. f </label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta23" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. g</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    24. Si la primera hora de conferencia con el extranjero cueesta 30 euros cada 15 minutos, y en las horas siguientes cuesta 20 euros cada 15 minutos, ¿Cuánto cuesta una conferencia de dos horas y media?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta24" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. 400 euros</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta24" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. 220 euros</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta24" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. 240 euros</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta24" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. 300 euros</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 20rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    25. ¿De qué recipiente saldrá el líquido con mas fuerza?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta25" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Del 1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta25" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B.Del 2</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta25" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Del 3</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta25" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. No se puede saber</label>
                                    </div>
                                    <div class="text-center">
                                        <img src="img/p25.PNG" alt="MDN">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    26. ¿Cuál de las palabras significa lo mismo que AUTÓNOMO?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta26" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Independiente</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta26" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Anónimo</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta26" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Tranquilo</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta26" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Análogo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 23rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    27. ¿Cuántas circunferencias cortan el triángulo en dos y solamente dos lados?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta27" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. 2 circunferencias</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta27" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. 5 circunferencias</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta27" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. 3 circunferencias</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta27" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. 4 circunferencias</label>
                                    </div>
                                    <div class="text-center">
                                        <img src="img/p27.PNG" alt="MDN" width="260" height="180">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    28. Comenzamos un viaje a las 10 de la mañana. En la primera hora la velocidad media es de 55 km/hr, y luego esta media va aumentando 5 km/hr cada hora. Al llegar las dos de la tarde, la media comienza a reducirse en 7 km/hr cada hora. ¿Cuál es la media a las 5 de la tarde?
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta28" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. 70 km/hr</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta28" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B.65 km/hr</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta28" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. 49 km/hr</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta28" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios4">D. 56 km/hr</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card"style="height: 28rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    29. Sabemos que en el plano dibujado, el garaje está al oeste de Sevilla. Si usted está en la gasolinera y quiere ir a cargar madera, debera salir hacia el....
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta29" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Norte</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta29" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Sur</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta29" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Este</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta29" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Oeste</label>
                                    </div>
                                    <div class="text-center">
                                        <img src="img/p29.PNG" alt="MDN" width="260" height="240">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    30. Siguiendo sobre el plano anterior, cuando cargue la madera, para ir a sevilla deberá salir hacia el...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta30" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Noroeste</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta30" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Sur</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta30" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Sureste</label></div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta30" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Norte</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a type="submit" class="btn btn-primary mb-3" href="bateria_inst_2.php">Siguiente bloque</a>
                    </div>
                </form>
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

    <script src="js/tiempo_bloq_1.js"></script>
    <script>
        $(":radio").click(function(){
            var radioName = $(this).attr("name"); //Get radio name
            $(":radio[name='"+radioName+"']").attr("disabled", true); //Disable all with the same name
        });
    </script>
</body>

</html>