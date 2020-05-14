
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
                
                
                    <form action="Registro.php" method="post">
                  <div class="form-group" >
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" id="username" name="username">
                  </div>
                  <div class="form-group" >
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                  </div>
                    <div class="form-group" >
                     <label>E-mail</label>
                     <input type="text" class="form-control" placeholder="E-mail" id="Email" name="email">
                  </div>
                  <button type="submit" class="btn btn-black" id="entrar">Registrar</button>
                  
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

