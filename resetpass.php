<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="dashboard/img/huella.png" />
        <title>CASA S.A | PIURA</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        
    </head>
    
    <body>
     
      <div class="container-login">
        <div class="wrap-login">
            <form class="login-form validate-form" id="formLogin" action="recuperar.php" method="post">
            <center><img  src="dashboard/img/logocasa.png"></center>
            <center><h6>Ingresa tu correo para recuperar contraseña.</h6></center>
                <!--<span class="login-form-title">Asist-List</span>-->
                
                <div class="wrap-input100" data-validate = "Correo incorrecto">
                    <input class="input100" type="email" id="email" name="email" placeholder="Correo">
                    <span class="focus-efecto"></span>
                </div>
                
                
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="btnrecuperar" class="login-form-btn" value="Enviar" onclick="javascript: return confirm('¿Deseas enviar el correo?');">Enviar</button>
                        
                    </div>
                    <a href="index.php" id="volver" class="mt-3 mb-4" title="Volver">Volver</a>
                </div>
            </form>
        </div>
    </div>     
        
        
     <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
    </body>
</html>