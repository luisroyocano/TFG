

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
            
            body{
                 background-size: 100%; 
                }
            nav{
                margin-left: 40%;
                margin-right: 40%;
                margin-top: 2%;
                background-color: #C0C0C0;
                opacity: 0.8;
                display: flex;                        
              }
              .jumbotron{
                  background-color: #C0C0C0;
                opacity: 0.8;
              }
              
        </style>
    </head>
    <body background="imagenes/coche.jpg">
        <?php
       
        ?>
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" style="background-color:#EF8354; color: black; " >Presupuestos</a>
                </div>
                <ul class="nav navbar-nav" id="texto">
                    <li class="active"><a href="prueba.php" style=" color: black;">Inicio</a></li>
                </ul>
            </div>
        </nav> 
        
        
        <div class="container center">
            <div class="jumbotron">
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form class="contact-us form-horizontal" action="creapdf.php" method="post">
                        <legend>Rellena los datos para generar un presupuesto</legend>        
        
                        <div class="control-group">
                            <label class="control-label">Nº consulta</label>
                            <div class="controls">
                                <div class="input-prepend">
                                <span class="add-on"><i class="icon-envelope"></i></span>
                                    <input type="text" class="input-xlarge" name="consulta" placeholder="consulta">
                                </div>
                            </div>    
                        </div>
        
                        <div class="control-group">
                            <label class="control-label">Descripción</label>
                            <div class="controls">
                                <div class="input-prepend">
                                <span class="add-on"><i class="icon-pencil"></i></span>
                                    <textarea name="descripcion" class="span4" rows="4" cols="80" placeholder="Descripción de producto (Max 200 characters)"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                          <div class="controls">
                            <button type="submit" class="btn btn-primary">Presupuesto</button>
                            <button type="button" class="btn">Cancel</button>
                          </div>    
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
                <img   width="100%" src="imagenes/cropped-SRCPegatina-3.png" alt=""/> 
            </div>
        </div>
        
         <script src="js/bootstrap.min.js" type="text/javascript"></script>
             <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
           
    </body>
</html>
