<?php
session_start();

$usuario = $_POST['username'];
$password1 = $_POST['password'];
$mensaje = "";
require('configuracion.php');
function conectaBBDD(){
    
    $conexion_mysql = new mysqli($servidor, $usuario_mysql, $clave_mysql, $bd);
    $conexion_mysql -> query("SET NAMES UTF8");
    return $conexion_mysql;
}
$con = mysqli_connect($servidor, $usuario_mysql, $clave_mysql, $bd);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if ( $usuario == '' && $password1 =='' ) {
	// Could not get the data that should have been sent.
	//die ('Rellena el usuario y la contraseña');
    $mensaje = "introduce usuario y contraseña";
//    echo 'introduce usuario y contraseña';
}
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            $stmt->fetch();
            // Account exists, now we verify the password.
            // Note: remember to use password_hash in your registration file to store the hashed passwords.
           // ESTA ES LA FOMRA FINAL CON LA PASSWORD ENCRIPTADA:
            //usuario: prueba2 contraseña: 1234
             if (password_verify($_POST['password'], $password)) {
                //if ($_POST['password'] == $password) {
                    // Verification success! User has loggedin!
                    // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
                    session_regenerate_id();
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['name'] = $_POST['username'];
                    $_SESSION['id'] = $id;
                    echo 'Bienvenido ' . $_SESSION['name'] . '!';
                    header('Location: prueba.php');
	} else if($usuario != '') {
            $mensaje = "Contraseña incorrecta";
//		echo 'Contraseña incorrecta!';
	}
        } else if($usuario != ''){
            $mensaje = "Nombre de usuario incorrecto";
//                echo 'Nombre de usuario incorrecto!';
        }
	$stmt->close();
}else
     {
    echo 'HOLA K ASE';
    echo "Falló la preparación: (" . $con->errno . ") " . $con->error;
}


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
      
            body {
                 background-size: 100%;
               
              }
             
            .jumbotron{
/*                background-color: #f5f5f5;*/
                background-color: #C0C0C0;
                
                opacity: 0.7;
            }
        </style>
    </head>
    <body background="imagenes/coche.jpg">
        
        
         <div id="pagina" class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <br>  <br>  <br>  <br>
            <div class="jumbotron">
               
            <img   width="100%" src="imagenes/cropped-SRCPegatina-3.png" alt=""/>
               
                <hr class="my-4">
                <div class="form-group">
                
                
                    <form  style="align: center;" action="login.php" >
                    <div class="form-group" >
                       <label><?php echo $mensaje;?></label>    
                    </div>
                    <button style="align: center;" type="submit" class="btn btn-black" id="entrar">Volver a intentar</button>
                  </form>
                
              
            </div></div>
                <div class="col-md-4"></div>
                </div>
        </div>
              </div>
             <script src="js/bootstrap.min.js" type="text/javascript"></script>
             <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
    </body>
       
              
             <script src="js/bootstrap.min.js" type="text/javascript"></script>
             <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
    </body>
</html>