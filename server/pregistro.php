<?php
    require_once('connection.php');

	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$mail= $_POST['correo'];
    $tipo=$_POST['tipo'];
    $newUser = $_POST['usuariolg'];
    $newPass = $_POST['passwordlg'];
	$rnewPass = $_POST['repasswordlg'];

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail = $conexion->query("SELECT * FROM usuarios WHERE email= '$mail'");
	$check_mail=mysqli_num_rows($checkemail);
        if($newPass == $rnewPass){
			if($check_mail>0){
				// echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
				echo json_encode(array('error' => true, 'tipo' => 'Email existente', 'success'=> false ));
			}else{
				// $hashed_pass = password_hash($newPass, PASSWORD_DEFAULT);
				function crypto(){
					
				}

				$conexion->query("INSERT INTO usuarios VALUES('','$nombres','$apellidos','$tipo','$newUser','$hashed_pass', '$mail')");
				//echo 'Se ha registrado con exito';
				echo json_encode(array('error' => false, 'tipo' => 'completo', 'success' => true ));

			}
		}else{
			echo json_encode(array('error' => true, 'tipo' => 'Email existente', 'success'=> false ));
			
			echo 'Las contraseñas son incorrectas';
		}
		header('Location: ../index.php');

	
?>