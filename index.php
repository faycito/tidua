<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        if($_SESSION['usuario'])
            header('Location: content.php');
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Auditoria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="client/css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="client/css/generalClases.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="client/css/index.css" />

</head>
<body>
   <div class="error"> <span> El USUARIO o la CONTRASEÑA son incorrectos. Vuelva a intentar.</span> </div>
   <div class="login">
        <div class="lg-content">
            <form action="login.php" id="formLg">
                <input type="text" name="usuariolg" placeholder="Nombre de usuario" required />
                <input type="password" name="passwordlg" placeholder="Contraseña" required />
                <input type="submit" class="loginBtn" value="Iniciar Sesión" />
            </form>
            <div class="noacc">
                <a href="registro.php">¿No tienes cuenta?, registrate</a>
            </div>
        </div>
    </div>

    <?php
        function crypto(){
            //encriptar
            $variable = 'ismaelalex';
            $bin = '';
            $text = '';
            $text2 = '';
            $text3 = '';
            $newDec = '';
            // Inicia ciclo for para obtener el binario de cada letra y luego juntarlo (separandolo por un espacio) ↓↓
            for($i=0; strlen($variable)>$i; $i++){
                // $bin tiene el valor binario de la cadena separando cada letra por espacios. 
                $bin .= decbin(ord($variable[$i])).' ';
            }
            // crea una nueva variable para utilizar $bin sin modificarlo. 
            $nuevavar = $bin;
            // asigno variable que almacena el tamaño del string ↓↓
            $strSize = strlen($variable);
            // Valor Binario del n° del tamaño del string ↑↑↓↓
            $newbin = decbin($strSize);
            // ↓↓Obtengo la cantidad de numeros binarios de la variable $newbin↑ 
            $newbinleng = strlen($newbin);
            
            // Concateno el valor binario del ($newbin) tamaño del string (linea 53)
            $nuevavar .=$newbin;
            // hago un string sin espacios. este bin se convierte en array
            $bin3 = explode(' ', $nuevavar);

            //For que convierte la variable Bin3 de array a cadena.
            for($i=0; count($bin3)>$i; $i++){
                // creo la variable text2 para que el array sea convertido a un string. 
                $text2 .= $bin3[$i];
            }
            $strwtfinbin = substr($text2, 0,-$newbinleng);
            
            for($i=0; strlen($text2)>$i; $i++){
                $newDec .= bindec($text2[$i]);
            }
            $newOCt = decoct($strwtfinbin);
            $ocDe = bin2hex($strwtfinbin);
            $newHex = dechex($strwtfinbin);
            $another = $newOCt.$ocDe.$newbin.$newHex;
            $finalHash = '$Is%$'.$another.'$AL$';
            //desencriptar
            $bin2 = explode(' ', $bin);
            for($i=0; count($bin2)>$i; $i++){
                $text .= chr(bindec($bin2[$i]));
            }
            // el string sin la cantidad binaria añadida

            //salida final
            return $finalHash;
        }
        $final = crypto();
        echo $final;

    ?>
   <script src="client/js/jquery-3.3.1.min.js"></script>
   <script src="client/js/main.js"></script>
</body>
</html>