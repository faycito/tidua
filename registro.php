<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Auditoria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="client/css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="client/css/generalClases.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="client/css/registro.css" />

</head>
<body>
   <div class="login">
        <div class="lg-content">
            <form action="" id="formRg">
                <input type="text" name="nombres" placeholder="Nombres" required/>
                <input type="text" name="apellidos" placeholder="Apellidos" required />
                <input type="email" name="correo" placeholder="Correo Electrónico" required />
                <p>Tipo</p> <select name="tipo">
                    <option value="Administrativo">Administrativo</option>
                    <option value="Detalle Economico">Detalle Economico</option>
                </select>
                <input type="text" name="usuariolg" placeholder="Nombre de usuario" required />
                <input type="password" name="passwordlg" placeholder="Contraseña" required />
                <input type="password" name="repasswordlg" placeholder="Repite Contraseña" required />
                <input type="submit" class="loginBtn" value="Registrar" />
            </form>
        </div>
    </div>
   <script src="client/js/jquery-3.3.1.min.js"></script>
   <script src="client/js/registro.js"></script>
</body>
</html>