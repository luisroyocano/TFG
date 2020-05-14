<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
            .jumbotron{
                background-color: #f5f5f5;
                opacity: 0.8;
            }
            body {
                 background-size: 100%;
               
              }
             
            
        </style>
    </head>
    <body background="imagenes/coche.jpg">
        
        <?php
             $mensaje = "";
        ?>
         <div id="pagina" class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <br>  <br>  <br>  <br>
            <div class="jumbotron">
                <h1 class="display-4">Registro</h1>
               
                <hr class="my-4">
                <div class="form-group">
                
                
                    <form action="pag_registro.php" method="post">
                  <div class="form-group" >
                     <label><?php echo $mensaje;?></label>
                     
                  </div>
                  <button type="submit" class="btn btn-black" id="entrar">Volver a intentar</button>
                  
               </form>
              
            </div></div>
                <div class="col-md-4"></div>
                </div>
        </div>
              </div>

             <script src="js/bootstrap.min.js" type="text/javascript"></script>
             <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
    </body>
</html> 
        <?php
        
            
            require('configuracion.php');
            function conectaBBDD(){

                $conexion_mysql = new mysqli($servidor, $usuario_mysql, $clave_mysql, $bd);
                $conexion_mysql -> query("SET NAMES UTF8");
                return $conexion_mysql;
            }

            $con = mysqli_connect($servidor, $usuario_mysql, $clave_mysql, $bd);
            if ( mysqli_connect_errno() ) {
            
                die ('Fallo al conectar a MySQL: ' . mysqli_connect_error());
            }
            
            if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
                    
                    die ('Complete el formulario de registro');
            }
            
            if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
                   
                    die ('Complete el formulario de registro');
            }
            
            if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
                    
                    $stmt->bind_param('s', $_POST['username']);
                    $stmt->execute();
                    $stmt->store_result();
                    
                    if ($stmt->num_rows > 0) {
                            
                            $mensaje = 'Este usuario ya existe, porfavor elija otro';
                    } else {
                      die ('Este usuario ya existe, porfavor elija otro');     
                    }
                    $stmt->close();
            } else if($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)'))  {
                    // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
                $stmt->execute();
                $mensaje = 'El usuario ha sido registrado correctamente';
                header('Location: admin.php');
                    $mensaje =  'No se pudo realizar el rigstro!';
            }
            //$con->close();
//             if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
//                // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
//                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
//                $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
//                $stmt->execute();
//                $mensaje = 'El usuario ha sido registrado correctamente';
//                header('Location: admin.php');
 else {
                    
                    $mensaje =  'No se pudo realizar el registro';
            }
?>
    

