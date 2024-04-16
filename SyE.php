<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serpientes y Escaleras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<style>
    body {
        background-image: url(/fondo.jpg);

    }

    div {}

    .titulo {
        margin-left: 80px;
        font-size: 10px;
        color: black;


    }

    .boton {
        font-size: 40px;
    }

    table {
        border-collapse: collapse;
    }

    table td {
        border: 3px solid black;
    }
</style>

<body>
    <?php
    $jugador1casillaAcumulado = 0;
    $dado = 0;
    $filaActual = 0;
    if (isset($_POST['valor'])) {
        $dado = $vrandom = rand(1, 12);
        $valorantiguo = $_POST['valor'];
        $jugador1casillaAcumulado = $valorantiguo + $dado;

        switch ($jugador1casillaAcumulado) {
            case '11':
                $jugador1casillaAcumulado = 10;
                $mensaje = "USTED CAYÓ EN LA CASILLA 11 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 10";
                $alerta = 1;
                break;
            case '14':
                $jugador1casillaAcumulado = 64;
                $mensaje = "USTED CAYÓ EN LA CASILLA 14 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 64";
                $alerta = 1;
                break;
            case '19':
                $jugador1casillaAcumulado = 59;
                $mensaje = "USTED CAYÓ EN LA CASILLA 19 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 59";
                $alerta = 1;
                break;
            case '28':
                $jugador1casillaAcumulado = 75;
                $mensaje = "USTED CAYÓ EN LA CASILLA 28 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 75";
                $alerta = 1;
                break;
            case '43':
                $jugador1casillaAcumulado = 5;
                $mensaje = "USTED CAYÓ EN LA CASILLA 43 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 5";
                $alerta = 1;
                break;
            case '70':
                $jugador1casillaAcumulado = 30;
                $mensaje = "USTED CAYÓ EN LA CASILLA 70 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 30";
                $alerta = 1;
                break;
            case '72':
                $jugador1casillaAcumulado = 91;
                $mensaje = "USTED CAYÓ EN LA CASILLA 72 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 91";
                $alerta = 1;
                break;
            case '87':
                $jugador1casillaAcumulado = 74;
                $mensaje = "USTED CAYÓ EN LA CASILLA 87 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 74";
                $alerta = 1;
                break;
            case '82':
                $jugador1casillaAcumulado = 99;
                $mensaje = "USTED CAYÓ EN LA CASILLA 82 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 99";
                $alerta = 1;
                break;
            case '96':
                $jugador1casillaAcumulado = 38;
                $mensaje = "USTED CAYÓ EN LA CASILLA 96 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 38";
                $alerta = 1;
                break;


            default:
                if ($dado > 1) {
                    $mensaje = "USTED AVANZO $dado CASILLAS";
                } else {
                    $mensaje = "USTED AVANZO $dado CASILLAS";
                }
                $alerta = 1;
                break;
        }
    }
    ?>


    <div class="row p-1">
        <div class="col-6">
            <h1>JUEGO DE SERPIENTES Y ESCALERAS</h1>
            <form action="/SyE.php" method="post">
                <div class="row">
                    <div class="col-1g-4">
                        <label class="form-label" for="valor">ACUMULADO</labe><input class="form-control" type="text" id="valor" name="valor" min="1" max="10" value="<?= $jugador1casillaAcumulado ?>" required>
                    </div>
                    <div class="col-1g-4">
                        <label class="form-label" for="dado">DADO</labe><input class="form-control" type="text" id="dado" name="dado" min="1" max="10" value="<?= $dado ?>" required>
                            <imput type="hidden" name="Nojugada">
                    </div>
                    <div class="col-1g-4">

                        <input type="submit" id="enviar" name="enviar" class="btn btn-warning" value="TIRAR">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-1g-4">
                        <a href="/SyE.php" id="enviar" name="enviar" class="btn btn-danger">REINICIAR</a><br>
                    </div>
                </div>
            </form>
            <div>
                <?php
                if ($dado > 0) {

                ?>
                    <div style="border:solid"><br>
                        <?php
                        if ($jugador1casillaAcumulado < 100) {
                        ?>
                            <h3>TIRO</h3>
                            <h4><?= $dado ?></h4>

                            <h4><?= $mensaje ?></h4>
                    </div>
                <?php } else {
                ?>
                    <h1>FELICIDADES GANASTE</h1>
            <?php
                        }
                    } ?>
            </div>
        </div>
        <div class="col-6">


            <img src="/escalera1.png" alt="" style="z-index:2; margin-top:10px; margin-left:560px; position: absolute;
                    width: 50px; height:200px; transform: rotate(20deg)">
            <img src="/escalera2.png" alt="" style="z-index:2; margin-top:180px; margin-left:300px; position: absolute;
                    width: 50px; height:400px; transform: rotate(150deg)">
            <img src="/escalera_corta.png" alt="" style="z-index:2; margin-top:25px; margin-left:75px; position: absolute;
                    width: 50px; height:100px; transform: rotate(0deg)">
            <img src="/escalera_corta2.png" alt="" style="z-index:2; margin-top:270px; margin-left:75px; position: absolute;
                    width: 50px; height:280px; transform: rotate(0deg)">
            <img src="/escalera1.png" alt="" style="z-index:2; margin-top:130px; margin-left:400px; position: absolute;
                    width: 50px; height:410px; transform: rotate(-20deg)">
            <img src="/serpiente_larga_rosa.png" alt="" style="z-index:2; margin-top:190px; margin-left:600px; position: absolute;
                    width: 50px; height:300px;">
            <img src="/serpiente_pequeña.png" alt="" style="z-index:2; margin-top:90px; margin-left:415px; position: absolute;
                    width: 50px; height:100px;">
            <img src="/serpiente_pequeña_verde.png" alt="" style="z-index:2; margin-top:320px; margin-left:200px; position: absolute;
                    width: 50px; height:300px; transform: rotate(-20deg)">
            <img src="/serpiente_pequeña.png" alt="" style="z-index:2; margin-top:550px; margin-left:600px; position: absolute;
                    width: 50px; height:100px;">
            <img src="/serpiente_larga_rosa.png" alt="" style="z-index:2; margin-top:-30px; margin-left:220px; position: absolute;
                    width: 50px; height:470px; transform: rotate(15deg)">
            <?php
            if ($jugador1casillaAcumulado == 0) {
            ?>
                <img src="/fichanegra.png" alt="" style="z-index:2; width:60px; height:50px; margin-top:600px;
                        margin-left:-70px; position:absolute;">
                <img src="/fichanegra.png" alt="" style="z-index:2; width:60px; height:50px; margin-top:600px;
                        margin-left:-70px; position:absolute;">
            <?php
            }
            ?>
            <table class="tablero" style="z-index: 1;">
                <?php
                $colores = ['yellow', 'white', 'red', 'blue', 'green'];
                $NoCasilla = 101;
                $coloranterior = '';
                for ($fila = 0; $fila < 10; $fila++) {
                    echo "<tr>";
                    for ($columna = 0; $columna < 10; $columna++) {
                        echo "<td>";
                        $colorquetoca = rand(0, 4);
                        while ($colorquetoca == $coloranterior) {
                            $colorquetoca = rand(0, 4);
                        }
                        $coloranterior = $colorquetoca;

                        if ($fila > 0) {
                            if ($columna == 0) {
                                $NoCasilla -= 10;
                            } else {
                                if ($fila % 2 == 0) {
                                    $NoCasilla--;
                                } else {
                                    $NoCasilla++;
                                }
                            }
                        } else {
                            $NoCasilla--;
                        }

                        if ($jugador1casillaAcumulado == $NoCasilla && $jugador1casillaAcumulado > 0 && $jugador1casillaAcumulado < 101) {
                            echo "<div class='ficha' style='width: 60px; height: 60px; border: solid; background-color: $colores[$colorquetoca]'><img src='/fichanegra.png' alt='' style='z-index: 2; width: 60px; height: 60px;'></div>";
                        } else {
                            echo "<div class='ficha' style='width: 60px; height: 60px; border: solid; background-color: $colores[$colorquetoca]'><p>$NoCasilla</p></div>";
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>