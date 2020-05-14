<?php
session_start();


$mensaje = "";
if ($_SESSION['name'] == 'admin') {
    header('Location: admin.php');
}else
     {
    
    $mensaje = "No tiene permisos de administrador";
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
                    <button style="align: center;" type="submit" class="btn btn-black" id="entrar">Iniciar sesión Como Admin</button>
                </form>
                    <form  style="align: center;" action="prueba.php" >
                    <div class="form-group" >
                       
                    </div>
                    <button style="align: center;" type="submit" class="btn btn-black" id="entrar">Volver</button>
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
