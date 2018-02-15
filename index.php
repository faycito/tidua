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
  
            for($i=0; strlen($variable)>$i; $i++){
                $bin .= decbin(ord($variable[$i])).' ';
            }
            $nuevavar = $bin;

            $strSize = strlen($variable);

            $newbin = decbin($strSize);

            $newbinleng = strlen($newbin);
            

            $nuevavar .=$newbin;

            $bin3 = explode(' ', $nuevavar);
            for($i=0; count($bin3)>$i; $i++){
                $text2 .= $bin3[$i];
            }
            $strwtfinbin = substr($text2, 0,-$newbinleng);

            //desencriptar
            $bin2 = explode(' ', $bin);
            for($i=0; count($bin2)>$i; $i++){
                $text .= chr(bindec($bin2[$i]));
            }
            return $strwtfinbin;
        }
        $final = crypto();
        echo $final;

    ?>
   <script src="client/js/jquery-3.3.1.min.js"></script>
   <script src="client/js/main.js"></script>
</body>
</html>