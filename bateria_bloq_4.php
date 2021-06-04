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
    <title>Campus Virtual | Batería para Conductores - Bloque 4</title>
</head>

<body>
    <div class="container">
        <div class="row">
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
        </br>
        <div class="row">
        <div class="col-sm-12" align="center">
                <h2><img src="img/psico.png" alt="examen" width="50" height="50"> Batería para Conductores - Bloque 4</h2>
                <hr class="my-4">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form class="col-sm-12">

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    1. Soy prudente, ante todo, cuando...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. Conduzco en
                                            ciudad</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. La carretera está en
                                            mal estado</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                        <label class="form-check-label" for="respuesta3">C. Llevo vidas bajo mi
                                            responsabilidad</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                        <label class="form-check-label" for="respuesta4">D. He tomado unas
                                            copas</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    2. Me muestro impertubable y tranquilo...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Ante otros
                                            conductores que me llaman la atención o me hacen una "faena"</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B.Cuando se me cala
                                            el coche y me pitan los de atrás</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Con los
                                            acompñantes que constantemente me dicen lo que debo hacer y me
                                            advierten de las normas de circulación</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Ante peatones
                                            osados</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    3. Me impaciento cuando...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Tengo que llegar
                                            pronto a alguna parte.</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Voy detras de un
                                            vehículo que circula lentamente y me impide adelantarme</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Me encuentro con
                                            atascos o algún contratiempo</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. En zona urbana
                                            tengo
                                            que detenerme ante los pasos de peatones</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    4. Mi comportamiento es...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Correcto sólo
                                            con
                                            conductores educados</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. De superioridad
                                            ante
                                            otros conductores</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Siempre educado
                                            y
                                            correcto</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Agresivo con los
                                            conductores que cometen infracciones</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    5. Me muestro intolerante ante conductores...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Novatos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Que me ponen en
                                            situaciones díficiles</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Que infringen
                                            las
                                            normas importantes de tráfico</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Poco
                                            educados</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    6. Cuando tengo prisa...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. No presto
                                            demasiada
                                            atención a las señales</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Me irritan
                                            fácilmente los pequeños percances</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Soy más
                                            impaciente</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Me muestro poco
                                            correcto con los demás conductores</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    7. Conduciendo soy sobre todo cortés con...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Personas jóvenes
                                            o
                                            interesantes del otro sexo</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Un anciano o
                                            minusválido</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Los
                                            novatos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Los conocidos o
                                            las
                                            personas que me caen bien</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    8. Mi conducta es intrasigente con...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Automovilistas
                                            temerarios y obstinados</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Los que me hacen
                                            faenas</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Los jovenes de
                                            la
                                            moto ruidosa</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios4">D. Los novatos o
                                            inexpertos </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    9. Insulto -aunque no lo oigan- a otros conductores cuando...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Tengo paciencia
                                            y no
                                            me la ceden</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Intento
                                            adelantar y
                                            me impiden hacerlo</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Me pitan y me
                                            dan
                                            luces para llamarme la atención</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. En ninguno de
                                            los
                                            casos anteriores</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    10. Me pongo nervioso e impaciente conduciendo...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. En caravanas o
                                            ante
                                            los atascos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Si no puedo
                                            adelantar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Ante las
                                            retenciones
                                            de tráfico sin motivo aparente</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Si no llego a
                                            tiempo
                                            a una entrevista o cita</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    11. Si llevo prisa, lo que más me molesta es que...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. Los peatones crucen
                                            delante por donde no deben o cuando no les corresponde</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. El agente urbano
                                            detenga
                                            el tráfico largamente</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                        <label class="form-check-label" for="respuesta3">C. Otros conduzcan
                                            lentamente impidiendo adelantarles</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                        <label class="form-check-label" for="respuesta4">D. Haya señales que
                                            limiten
                                            la velocidad</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    12. Llamo la atención a los conductores que...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Cometen
                                            imprudencias</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B.Conducen
                                            lentamente
                                            sin movitvo aparente</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. No me ceden el
                                            paso</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Me deslumbran
                                            con
                                            los faros</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    13. Recrimino sin piedad la actuación de los conductores...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Novatos o
                                            inexpertos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B.
                                            "Listillos"</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C.
                                            Impacientes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Poco educacos y
                                            faltones</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    14. Me siento más contento conmigo cuando
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Cedo el paso
                                            aunque
                                            no tengan preferencia</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. He demostrado a
                                            los
                                            demás que soy un gran conductor</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Durante el viaje
                                            he
                                            respetado las normas de circulación</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. He favorecido al
                                            adelantamiento a otros automovilistas</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    15. Me molesta que...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. No respeten el
                                            ritmo
                                            que llevo conduciendo</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Me adelanten
                                            vehículos menos potentes que el mío</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Me indiquen los
                                            fallos y errores cometidos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Hablen y me
                                            distraigan cuando estoy conduciendo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    16. Me comporto agresivamente si...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Me doy un
                                            pequeño
                                            golpe con otro vehículo</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Tengo que hacer
                                            una
                                            maniobra bruscamente por la culpa de los otros</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Me llaman la
                                            atención sin razón alguna</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Me quitan el
                                            lugar
                                            de aparcamiento</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    17. Tiendo a arriesgarme hbitualmente
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. En los
                                            adelantamientos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Cuando hay mala
                                            visibilidad</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Al tomar las
                                            curvas</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. En ninguna de
                                            estas
                                            circunstancias</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    18. Extremo las medidas de seguridad...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Siempre que me
                                            aproximo a un paso peatonal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Cuando viajo en
                                            días
                                            señalados de mucha circulación</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. En días de
                                            lluvia</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios4">D. En los
                                            adelantamientos</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    19. Cuando llevo prisa...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Me pongo
                                            nervioso e
                                            impaciente ante los semaforos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Me pongo de mal
                                            humor por las actuaciones de los agentes de tráfico</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. No presto
                                            demasiada
                                            atención a la señalización</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. No suele
                                            sucederme
                                            nada de lo anterior</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    20. Me muestro inseguro con el coche...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Cuando la
                                            carretera
                                            está mojada o resbaladiza</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Al realizar los
                                            adelantamiento</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Cuando fallan
                                            los
                                            mecanismos del coche</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Casi
                                            nunca</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    21. Usted está maniobrando para estacionar su coche en la calle pero otros
                                    usuarios le pitan reiteradamente:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. Sigue maniobrando
                                            sin inmutarse</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. Aparca lo más rápido
                                            posible, intentando no molestar a los demás</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                        <label class="form-check-label" for="respuesta3">C. Reacciona de manera
                                            agresiva</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                        <label class="form-check-label" for="respuesta4">D. Se marcha a otro
                                            lugar o deja pasar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    22. Se encuentra ante una confluencia vial, con la señal "ceda el paso" y
                                    tráfico intenso:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Pasa si cree que
                                            no hay peligro</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Se incorpora
                                            rápidamente sin parar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Cede el paso con
                                            paciencia</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Si tiene prisa,
                                            no se detiene</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    23. Intenta aparcar en el lugar que acaba de quedar libre, pero otro
                                    automovilista más "listillo" se le adelanta:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Trata de
                                            indicarle que usted ha llegado antes y va a aparcar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Atraviesa su
                                            coche y discute el asunto</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Reacciona
                                            agresivamente y toca el clazon</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Busca, sin más,
                                            otro aparcamiento</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    24. Está ante un semaforo verde, pero el agente de tráfico retiene la
                                    circulación unos minutos, sin motivo aparente:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Se pone nervioso
                                            y se impacienta</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Hace caso del
                                            agente y se despreocupa del tema</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Se detiene y
                                            espera</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Si tarda un
                                            poco, le llama la atención de alguna manera</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    25. Va conduciendo normalmente en carretera; inesperadamente se le coloca
                                    delante otro usuario haciéndole realizar una brusca acción evasiva:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Si no ocurre
                                            nada, deja que siga</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Reacciona de
                                            forma agresiva y le llama la atencion</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Hace que se
                                            detenga para pedirle explicaciones</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Le adelanta y
                                            hace gestos insultantes</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    26. Conduciendo en caravana detrás de un vehiculo lento, al intentar
                                    adelantarte, otros vehiculos se adelantan, le impiden el paso e incluso le
                                    pitan:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Adelanta, pase
                                            lo que pase</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Deja que le
                                            adelanten y se vayan</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Recrimina la
                                            acción de los otros conductores</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Se aguanta y
                                            espera para poder intentarlo de nuevo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    27. Conduciendo por el carril central de una carreterade doble vía a una
                                    velocidad reglamentaria, otro automovilista le da reiteradamente señales de
                                    luces para que se retire a un lado:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Continua, sin
                                            importarle la impaciencia del otro conductor</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Pide disculpas y
                                            se pasa al otro carril</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Reacciona con
                                            agresividad y le indica que, si tiene prisa, adelante por el otro
                                            carril</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Se retira al
                                            otro carril</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    28. Conduciendo con normalidad por carretera, ve cómo el agente de tráfico
                                    le adelanta, y le indica que se detenga:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Se inquieta,
                                            pensando que haya hecho algo mal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Extrañado, se
                                            detiene, esperando ver lo que desea</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Se detiene
                                            tranquilamente, seguro de no haber infringido ninguna norma de
                                            circulación</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios4">D. Se detiene y
                                            sale del coche dando un fuerte portazo y voceando</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    29. Sale de viaje y algún miembro de su familia le va haciendo
                                    constantemente observaciones y recriminaciones:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Se siente
                                            molesto y le advierte de su actitud poco favorables para
                                            conducir</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Le manda callar
                                            y, si persiste, detiene el coche</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Tiene en cuenta
                                            alguna de sus observaciones</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. No hace caso a
                                            sus comentarios</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    30. Se encuentra en uno de los muchos atascos urbanos y ve cómo pasa el
                                    tiempo y apenas avanza:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Se tranquiliza y
                                            se inquieta al ver que nadie hace nada</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Se llena de
                                            paciencia y espera</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Adelanta por
                                            otro carril o por el arcén</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Procura salir
                                            por la primera calle</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    31. Por la mañana, debido a la densidad de tráfico urbano, no puede llegar
                                    puntual a su destinp...
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. Se impacienta y toca
                                            el claxon</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. Si lleca mucha
                                            prisa, procura buscar alguna solución o deja el coche aparcado y se
                                            va andando</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                        <label class="form-check-label" for="respuesta3">C. Pacientemente espera
                                            y, si puede, cambia de ruta</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                        <label class="form-check-label" for="respuesta4">D. Se enfurece y toca
                                            el claxon</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    32. Va conduciendo bastante lentamente por la carretera; otros
                                    automovilistas de atrás le pitan o le dan las luces:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Reacciona
                                            agresivamente</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Se va a su
                                            derecha y deja pasar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Sigue a su aire
                                            sin importarle</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Les indica que
                                            no puede ir más deprisa por alguna razón</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    33. Se encuentra ante una interrupción de tráfico sin conocer las causas, no
                                    obstante, ve cómo algunos automovilistas se cuelan por el arcén y continúan:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Los recrimina y,
                                            si es posible, obstaculiza su paso</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Espera
                                            tranquilamente</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Si otros pasan,
                                            usted les sigue</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Si lleva prisa,
                                            procura buscar una salida</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    34. Conduciendo, le sigue detrás otro vehículo que intenta delantarle; le
                                    indica usted la presencia de vehículos en sentido contrario y, sin embargo,
                                    insiste:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Sigue su
                                            camino</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Reitera el aviso
                                            y se retira lo más que puede a su derecha</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Le obstaculiza
                                            el paso</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Le recrimina
                                            agresivamente</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    35. De repente tiene que frenar ante la presencia de un peatón que se cruza
                                    y éste ni se inmuta
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. NSe detiene y le
                                            advierte de su imprudencia</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Le increpa
                                            agresivamente</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Le intenta
                                            asustar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Evita
                                            atropellarle y sigue su camino</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    36. El conductor que va delante, da un frenazo bruscamente y usted se
                                    empotra en la parte trasera, sin que pueda evitarlo
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Recrimina la
                                            acción del otro usuario</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Discute y le
                                            hace saber de su faena</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Baja a ver los
                                            desperfectos e intenta dialogar sobre el tema</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Reconoce su
                                            despiste y acepta sus reclamaciones</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    37. Se acaba de poner para usted el semaforo en verde, no obstante, observa
                                    que algunos peatones cruzan sin prisa, haciéndole esperar:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Intenta salir
                                            cortándoles el paso</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Espera
                                            pacientemente que pasen</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Les hace saber
                                            de alguna forma que debe esperar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Aceleta
                                            intimidándoles</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    38. Otro automovilista le adelanta, haciéndolo de forma temerana, y se
                                    coloca delante de su vehículo; usted trata de frenar, pero le alcanza
                                    causándole desperfectos:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Reacciona de
                                            forma agresiva contra el conductor</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Ve los daños y
                                            trata de llegar a un acuerdo con él</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Le hace saber
                                            que él ha sido el culpable</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios4">D. Trata de
                                            intimidarle para que pague los desperfectos</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    39. Conduciendo con normalidad, de pronto otro automolista, que no ha hecho
                                    el STOP, le alcanza lateralmente, causándole grandes daños en su coche:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Calmadamente le
                                            pide explicaciones</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Le hace saber
                                            que él es el causante y le advierte de su despiste</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Se muestra
                                            agresivo y le recrimina su error</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Se muestra
                                            agresivo e intransigente y hace ademanes de pegarle</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    40. Conduciendo en zona urbana son señal de velocidad limitada, va
                                    ligeramente por encima de lo indicado:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Se disculpa e
                                            intenta convencerle de que no le sancione</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Discute su
                                            actuación</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Acepta la
                                            sansión sin rechistar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. No hace caso de
                                            la multa</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    41. Se encuentra un semáforo en intermitencia y en verde para peatones:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. Acelera y pasa antes
                                            que ellos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. Espera impaciente
                                            que pasen</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                        <label class="form-check-label" for="respuesta3">C. Tranquilamente
                                            espera a que pase el último</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                        <label class="form-check-label" for="respuesta4">D. Sigue la marcha con
                                            preocupación</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    42. Va a adelantar a otro vehículo, pero cuando lo intenta, éste se lo
                                    impide a propósito aumentando la velocidad
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Toca el claxon
                                            insistentemente y pasa a toda costa</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Se muestra
                                            agresivo verbalmente o gestualmente</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Critica su
                                            acción, pero espera</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Le deja que se
                                            valla</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    43. Otro conductor hace que usted cometa una acción evasiva (o cometa una
                                    infracción) y no le pide disculpas:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Procura anotar
                                            su matrícula y denunciarle</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Se enfada mucho
                                            y le insulta aunque le oiga</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Trata de
                                            alcanzarle y le hace parar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Se resigna, sin
                                            más</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    44. En un autovía, con carril para vehículos lentos, se encuentra con un
                                    camión que no hace uso de dicho carril, obstruyéndole el paso:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta44" id="exampleRadios1" value="option_44_1">
                                        <label class="form-check-label" for="exampleRadios1">A. Le recrimina con
                                            gestos o palabras</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta44" id="exampleRadios2" value="option_44_2">
                                        <label class="form-check-label" for="exampleRadios2">B. Le indica que se
                                            retire al carril de vehículos lentos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta44" id="exampleRadios3" value="option_44_3">
                                        <label class="form-check-label" for="exampleRadios3">C. Le adelanta, sin
                                            más</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta44" id="exampleRadios4" value="option_44_4">
                                        <label class="form-check-label" for="exampleRadios3">D. Espera
                                            pacientemente</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    45. Va conduciendo acompañado de gente que le va distrayendo constantemente:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta55" id="exampleRadios1" value="option_45_1">
                                        <label class="form-check-label" for="exampleRadios1">A. Enfadado,
                                            recrimina su actuación</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta55" id="exampleRadios2" value="option_45_1">
                                        <label class="form-check-label" for="exampleRadios2">B. Procura
                                            ignorarlos o les que pide que le dejen en paz</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta55" id="exampleRadios3" value="option_45_1">
                                        <label class="form-check-label" for="exampleRadios3">C. Si no le hacen
                                            caso, detiene el coche</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta55" id="exampleRadios4" value="option_45_1">
                                        <label class="form-check-label" for="exampleRadios3">D. Participa en su
                                            conversación y de sus bromas</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    46. Se encuentra detrás de un conductor "novato" ante un semaforo que se
                                    pone en verde, pero tarda bastante en iniciar marcha:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Toca el claxon y
                                            recrimina su inexperiencia</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Le indica que
                                            inicie la marcha</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Se impacienta
                                            ante la tardanza</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Espera
                                            pacientemente a que inicie la marcha</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    47. En caravana, usted y otros conductores han cedido el paso a una
                                    ambulancia; sin embargo, otros que vienen detrás aprovecha la ocasión y le
                                    obstaculizan para incorporarse al carril:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Se enfada por
                                            ello y critica su actuación</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Les deja que
                                            pasen</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Les avisa para
                                            que le dejen incorporarse al tráfico</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta7" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Atraviesa el
                                            coche haciéndoles frenar bruscamente</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    48. Al intentar salir, encuentra un coche aparcado en doble fila que le
                                    impide su salida durante un buen rato:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Se enfada mucho
                                            y toca reiteradamente el claxon</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Al llegar el
                                            dueño le recrimina e insulta</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Toca el claxon
                                            para avisar al propietario y espera un poco</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta8" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios4">D. Acepta sus
                                            disculpas </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    49. Conduciendo de noche, otro vehículo que viene en sentido contrario le
                                    deslumbra, usted le avisa de ello, pero él no se da por enterado
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Le avisa de su
                                            negligencia</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Le insulta y le
                                            da luces</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Si persiste,
                                            hace lo mismo que él</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta9" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Disminuye la
                                            velocidad y deja que pase</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    50. Al intentar adelantar a un autobús, éste de inmediato da la
                                    intermitencia, para y gira a la izquierda:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Toca
                                            reiteradamente el claxon e intenta adelantar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Insulta e
                                            increpa su acción, pero no adelanta</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Desiste de
                                            adelantar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta10" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Sigue la
                                            maniobra de adelantamiento y le insulta al pasar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    51. De noche, una vez que ha adelantado a otro vehículo, éste mantiene las
                                    luces largas, deslumbrándole un buen rato
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. Frena bruscamente
                                            para que se dé cuenta de que le están molestando las luces</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. Le deja pasar y hace
                                            lo mismo que él</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                        <label class="form-check-label" for="respuesta3">C. Le hace señales para
                                            que se dé cuenta de que lleva luces largas</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                        <label class="form-check-label" for="respuesta4">D. Aumenta la velocidad
                                            para dejarle atrás</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    52. Va a entrar a una calle de dirección única, pero otro coche viene por
                                    ella, haciendo caso omiso de la señal de prohibido:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Le deja
                                            pasar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Le ahce
                                            retroceder, sin dudar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Le advierte de
                                            su error</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Le increpa y le
                                            hace retroceder</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    53. Conduciendo en caravana, vé como otros vehículos vienen adelantando por
                                    el arcén hasta que les obstculiza otro aparcado en él, entonces intentan
                                    colocarse delante de usted:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. No deja
                                            incorporarse a ninguno</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Da paso a uno o
                                            dos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Recrimina su
                                            actuación y no deja pasar a ninguno</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Si no tiene
                                            prisa, espera a que pasen</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    54. En un día de niebla abundante va conduciendo en carretera dtrás de un
                                    vehículo largo:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Intenta
                                            adelantar dando señales de luces</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Aguanta
                                            pacientemente hasta que le indique cuándo puede pasar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Le hace señales
                                            para que le indicque cuándo puede pasar</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Adelanta sin
                                            más</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    55. En un día de lluvia, al pasar por un charco, empapa a los peatones que
                                    pasan por la acera:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Se disculpa de
                                            alguna forma</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Continúa sin
                                            más</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Se ríe y piensa
                                            que la culpa es de ellos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Tendrá cuidado
                                            de que no vuelva a pasar en otra ocasión</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    56. Deja su coche estacionado en casco urbano; al regresar se encuentra con
                                    un agente multándole:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Intenta
                                            convencer al agente de que el retraso fue involuntario</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Increpa al
                                            agente si no hace caso</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Paga la multa y
                                            procura aparcar mejor otro día</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta6" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Se niega
                                            rotundamente a pagar la multa</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header text-white " style="background-color: #95B5AF 
;">
                                    57. Se acerca a un cruce en el cual tiene preferencia; sin embargo, viene
                                    otro usuario que no parece dispuesto a cederle el paso:
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">A. Continúa a la
                                            misma velocidad, ya que tiene preferencia</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">B. Le hace señales
                                            para hacerle saber su presencia y preferencia</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">C. Le deja pasar si
                                            lo hace</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios3">D. Le insulta por
                                            su actitud</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a type="submit" class="btn btn-primary mb-3" href="bateria_terminado.php">Finalizar</a>
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

    <script>
        $(":radio").click(function() {
            var radioName = $(this).attr("name"); //Get radio name
            $(":radio[name='" + radioName + "']").attr("disabled", true); //Disable all with the same name
        });
    </script>
</body>

</html>