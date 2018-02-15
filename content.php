<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        
    }else header('Location: index.php');
?>

<?php
include_once('server/connection.php');
$query = rellenarTabla();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Auditoria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="client/css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="client/css/generalClases.css" />

</head>
<body>
    <div class="nav-bar">
        <a href="#"> Home </a>
        <div class="btn-cSesion">
            <a href="./server/cerrarsesion.php"> Cerrar Sesion</a>
        </div>
    </div>

    <div class="full-container">
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <td width="100">Código</td>
                        <td width="200">Nombre</td>
                        <td width="200">Apellido</td>
                        <td width="100">Importe</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($alumno = $query->fetch_assoc())
                        {
                    ?>
                <tr>
                    <td> <?php echo $alumno['id']; ?></td>
                    <td><?php echo $alumno['nombre']; ?></td>
                    <td><?php echo $alumno['apellido']; ?></td>
                    <td><?php echo $alumno['importe']; ?> </td>
                </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- <?php
        $valor = "Alexande";
        $salida = bin2hex($valor);
        echo $valor;
        echo '<br/>';
        echo '<br/>';
        echo($salida);

        echo '<br/>';
        $salidaHex = hexdec($salida);
        echo($salidaHex);

        echo '<br/>';
        $salidaBin = decbin($salidaHex);
        echo($salidaBin);

        echo '<br/>';
        $sumBin = bin2hex($salidaBin);
        echo $sumBin;

        // echo '<br/>';
        // $salidaDec = hexdec($sumBin);
        // echo $salidaDec;

        // SALIDA DECODIFICADA

        echo '<br/>';
        echo '<br/>';
        echo '<br/>';
        // $decpaso1 = dechex($salidaDec);
        $decpaso2 = hex2bin($sumBin);
        $decpaso3 = bindec($decpaso2);
        $decpaso4 = dechex($decpaso3);
        $decpaso4 = hex2bin($decpaso4);

        echo ('el valor decifrado es: ');
        echo $decpaso4;


    ?> -->
</body>
</html>