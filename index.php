<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="dashboard/img/huella.png" />
        <title>ListApp | PIURA</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
    </head>
    
    <body>
     
      <div class="container-login">
        <div class="wrap-login">
        <?php
                $mysqli = new mysqli('localhost:3308', 'root', '', 'EPP');
            ?>
            <form class="login-form validate-form" id="formLogin" action="" method="post">
            <center><img  src="dashboard/img/logocasa.png"></center>
            <center><h5 class="h4 text-gray-900 mb-4">Inicio de Sesión</h5></center>


            <div class="" data-validate = "Tipo de usurio incorrecto">
                <select type="text" class="form-control" id="tipo" name="tipo"required>
                <option selected>--Seleccione Rol--</option>
                 <?php
                   $query = $mysqli -> query ("SELECT * FROM roles");
                  while ($valores = mysqli_fetch_array($query)) {
                 echo '<option value="'.$valores['nombre'].'">'.$valores['nombre'].'</option>';
                   }
                   ?>                  
                </select>
                </div>
                <?php
                  echo "<br>";
                    ?>
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-efecto"></span>
                </div>
                <div class="form-group">
                <div class="custom-control custom-checkbox small">
                 <input type="checkbox" class="custom-control-input" id="customCheck">
                 <label class="custom-control-label" for="customCheck">Recuerdame</label>
                        </div>
                </div>
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">Listo !</button>
                    </div>
                </div>
                <hr>
                <center><a href="resetpass.php">¿Olvidaste tu contraseña?</a></center>
            </form>
        </div>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="floating-container">
  <div class="floating-button">+</div>
  <div class="element-container">

    <a href="google.com"> <span class="float-element tooltip-left">
    <i class="fa fa-whatsapp my-float">
      </i></a>
    </span>
      <span class="float-element">
      <i class="material-icons">email
</i>
    </span>
      <span class="float-element">
      <i class="material-icons">chat</i>
    </span>
  </div>
</div>
    </div>     
   
 
     <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="codigo.js"></script>    
    </body>
</html>