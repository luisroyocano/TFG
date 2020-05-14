

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
            .jumbotron{
/*                background-color: #f5f5f5;*/
                background-color: #C0C0C0;
                width: 80%;
                opacity: 0.7;
                margin-top: 2%;
                align-content: center;
            } 
            body {
                 background-size: 100%; 
              }
            nav{ 
                    
                    margin-left: 5%;
                    margin-right: 5%;
                    margin-top: 2%;
                    background-color: #C0C0C0;
                    opacity: 0.8;
                    display: flex;
              }
        </style>
    </head>
    
    <body background="imagenes/coche.jpg">
        
        <?php
             
        ?>
        <nav class="navbar">
            <div class="container-fluid">
                <ul class="nav navbar-nav" id="texto">
                    <li><a href="Consultas.php" style=" color: black;">Consultas </a></li>
                    <li><a href="Presupuesto.php" style=" color: black;">Presupuestos</a></li>
                    <li><a href="Facturas.php" style=" color: black;">Facturas y Contabilidad</a></li>
                    <li><a href="Clientes.php" style=" color: black;">Proveedores y Clientes</a></li>
                    <li><a href="autentificacion_admin.php" style=" color: black;">Admin</a></li>
                </ul>
            </div>
          </nav>
        
        <div class="container center">
            <div class="jumbotron">
                <img   width="100%" src="imagenes/cropped-SRCPegatina-3.png" alt=""/>  
            </div>
        </div>

             <script src="js/bootstrap.min.js" type="text/javascript"></script>
             <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
    </body>
</html>
