<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
session_start();
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
                    <li><a href="prueba.php" style=" color: black;">Inicio </a></li> 
                    <li><a href="pag_registro.php" style=" color: black;">Registrar Usuario </a></li> 
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
