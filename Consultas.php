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
                .jumbotron{
/*                background-color: #f5f5f5;*/
                background-color: #C0C0C0;
                width: 80%;
                opacity: 0.8;
                margin-top: 2%;
                align-content: center;
            }
            nav{
                    margin-left: 40%;
                    margin-right: 40%;
                    margin-top: 2%;
                    background-color: #C0C0C0;
                    opacity: 0.8;
                    display: flex;               
                }
             
             
            
        </style>
    </head>
    <body background="imagenes/coche.jpg">
        
        <?php
        
           define("DB_HOST","localhost" );
                define("DB_USER", "root");
                define("DB_PASS", "");
                define("DB_DATABASE", "srcperformance" ); 
                
                
                $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
                
            if(isset($_POST['referencia'])){
            
                
                $ref = $_POST['referencia'];
                $sql = "select precio, marca, modelo from vmaxx Where ID = '$ref'";
              
                $resultado  = mysqli_query($con, $sql) or die ("no se ha podido realizar la consulta");
                $num_filas = $resultado -> num_rows;
                $respuesta = array();
                for ($i=0; $i<$num_filas; $i++){
                    
                    $r = $resultado -> fetch_array();
                    
                   $respuesta[0] = $r['precio'];
                   $respuesta[1] = $r['marca'];
                   $respuesta[2] = $r['modelo']; 
                   
                }
                $precioFinal = $respuesta[0] - ($respuesta[0]*0.43) + 29 + (($respuesta[0]*0.57)*0.21);
                            
                             
                     $stmt = $con->prepare("INSERT INTO reg_presu ( cliente, referencia, precio) VALUES ( ?, ?, ?)");
                        $stmt->bind_param("sss", $_POST['cliente'], $ref, $precioFinal);

                        // set parameters and execute
                      
                        $stmt->execute();           
                        $stmt->close();
                        $con->close();
                       }      
        ?>
        <nav class="navbar">
            
            <div class="container-fluid">
             
                <ul class="nav navbar-nav" id="texto">
                    <div class="navbar-header">
                        
                            <a class="navbar-brand" style="background-color:#EF8354; color: black; " >Consultas</a>
                    </div>
                    <li class="active"><a href="prueba.php" style=" color: black;">Inicio</a></li>
                </ul>
            </div>
        </nav>
        
        
        <div class="container center">
            <div class="jumbotron">
                <select class="form-control" id="exampleFormControlSelect1" >
                    <option>Elige una opción:</option>
                    <option value="vmaxx">vmax</option>
                    <option value="bilstein">bilstein</option>
                    <option value="kw">kw</option>
                </select>
                <div class="col-md-4">
                    <br><br><br>
                   
                    <form action="Consultas.php" method="POST">
                        <div class="form-group">
                            <input type="text" value = "" class="form-control" name="referencia" placeholder="Referencia">
                             <br><br><br>
                             <input type="text" value = "" class="form-control" name="cliente" placeholder="cliente">            
                        </div>  
                        <button type="submit" class="btn btn-primary">Consultar</button>
                    </form>
                    <br><br>
                    <form action="Presupuesto.php">
                    <button type="submit" class="btn btn-primary">generar presupeusto</button>
                      </form>
                 </div>
                <img   width="100%" src="imagenes/cropped-SRCPegatina-3.png" alt=""/>  
            </div>
        </div>
        
        
        <div id="pagina" class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <br><br><br>
                    <select class="form-control" id="exampleFormControlSelect1" >
                        <option>Elige una opción:</option>
                        <option value="vmaxx">vmax</option>
                        <option value="bilstein">bilstein</option>
                        <option value="kw">kw</option>
                    </select> 
                </div>       
                <div class="col-md-4">
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
                    <?php
                        if(isset($_POST['referencia'])){   
                            echo $precioFinal;
                        }
                    ?>
                    <br><br>
                    <?php
                        if(isset($_POST['referencia'])){
                            echo $respuesta[1];
                        }
                    ?>
                    <br><br>
                    <?php
                        if(isset($_POST['referencia'])){
                            echo $respuesta[2];
                        }
                         ?>
                        <?php
                        if(isset($_POST['referencia'])){
                            echo $_POST['cliente'];
                        }
                    ?>  
                </div>
                <div class="col-md-4">
                    <br><br><br>
                   
                    <form action="Consultas.php" method="POST">
                        <div class="form-group">
                            <input type="text" value = "" class="form-control" name="referencia" placeholder="Referencia">
                             <br><br><br>
                             <input type="text" value = "" class="form-control" name="cliente" placeholder="cliente">            
                        </div>  
                        <button type="submit" class="btn btn-primary">Consultar</button>
                    </form>
                    <br><br>
                    <form action="Presupuesto.php">
                    <button type="submit" class="btn btn-primary">generar presupeusto</button>
                      </form>
                 </div>
        </div>
        </div>
        
         <script src="js/bootstrap.min.js" type="text/javascript"></script>
             <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
    </body>
</html>
