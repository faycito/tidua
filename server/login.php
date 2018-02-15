<?php
    require_once('connection.php');
    sleep(.5);
    session_start();

    $user = $_POST['usuariolg'];
    $pass = $_POST['passwordlg'];
    $count = 0;
    // $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    $usuarios = $conexion->query("SELECT * FROM usuarios WHERE usuario='$user'");
   
    if($usuarios->num_rows == 1){

        $datos = $usuarios->fetch_assoc();
        $password =  $datos['password'];
        if(password_verify($pass, $datos['password'])):
            $_SESSION['usuario'] = $datos;
            echo json_encode(array('error' => false, 'tipo' => $datos ));
        else:
            echo json_encode(array('error' => true));
            $_SESSION['usuario'] = $datos;
        endif;
    }
    else{
            echo json_encode(array('error' => true));
    
    }
    $conexion->close();
?>