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
                
                opacity: 0.7;
            }
            body {
                 background-size: 100%;
               
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
                
                
                <form  style="align: center;" action="autentificacion.php" method="post">
                  <div class="form-group" >
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" id="username" name="username">
                  </div>
                  <div class="form-group" >
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                  </div>
                  <button style="align: center;" type="submit" class="btn btn-black" id="entrar">Login</button>
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
