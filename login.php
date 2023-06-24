<?php  
//Se conectar al servidor y se inserta los contenido ingresados en los input a la base de datos Register
require "servidor/server.php";
if(isset($_POST["boton"])){

   $nombre=$_POST['nombre'];
   $apellido=$_POST['apellido'];
   $gmail=$_POST['gmail'];
   $password=$_POST['password'];
   $confirmPassword=$_POST['confirmpassword'];

   $insectar=mysqli_query($conectar,"INSERT INTO `logeado` (`nombre`,`apellido`,`gmail`,`clave`,`confirmclave`) VALUES ('$nombre','$apellido','$gmail','$password','$confirmPassword') ");
}


if(isset($_POST['loginBoton'])){
    $loginNombre=$_POST['logingmail'];
    $loginPassword=$_POST['loginpassword'];
    $validar=mysqli_query($conectar,"SELECT * FROM `logeado` WHERE gmail='$loginNombre' AND  clave='$loginPassword'  ");
    $rodear=mysqli_num_rows($validar);
    if($rodear){
        header("location:front.html");
    }

    mysqli_free_result($validar);
    mysqli_close($conectar);

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<style>
    body{
         background:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1)),url(https://img.freepik.com/free-photo/japandi-living-room-interior-design_53876-145502.jpg?w=996&t=st=1686756383~exp=1686756983~hmac=e6f73bc0beaf5e29b257d803dda1663fce6652e83e5f9cdbf0bb03ad295af438);
         background-size: cover;
    }

    .row{
        background: linear-gradient(rgba(255,255,255,.1),rgba(255,255,255,.1));
        padding: 30px;
        border-radius: 10px;
    }

</style>
<div class="container" >
<nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand fw-bold fs-2 "  href="">HOU<span class="text-warning" >SES</span></a>
</nav>
</div>

<div class="container">

<div  class="row" >
    <div class="col-lg-6 col-sm-12 col-xs-12" >
        <h1 class="text-center" >LOGIN</h1>
<form action="" method="post" >
<!-- email -->

    <div class="input-group " >
        <div class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
              </svg>
        </div>
        <div class="form-floating">
            <input  class="form-control"  type="email"  placeholder="Email" id="gmail" name="logingmail"  >
<label for="nombre" >Email</label>
        </div>

    </div>
            <!-- password -->


    <div class="input-group my-2" >
        <div class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg>
        </div>
        <div class="form-floating">
            <input  class="form-control"  type="password"  placeholder="Contraña" id="contraseña" name="loginpassword"  >
<label for="contraseña" >Contraseña</label>

        </div>

    </div>
<!-- Boton de Inicar -->
    <div class="button  d-flex justify-content-center  my-1" >
        <input  class="btn btn-warning  w-50 "  type="submit" value="Iniciar" name="loginBoton" >

    </div>
</form>

    </div>

<!-- Parte donde la persona va a registrarse -->


    <div class="col-lg-6 col-sm-12 col-xs-12 " >
        <h1 class="text-center" >REGISTRAR</h1>
        <!-- nombre -->
        <form action=""  method="post" >
            <div class="input-group" >
                <div class="input-group-text" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                      </svg>
                </div>
                <div class="form-floating">
                    <input   class="form-control" type="text" placeholder="Nombre" id="nombre"  name="nombre" >
                    <label for="nombre">Nombre</label>


                </div>

            </div>

            <!-- apellido -->
            <div class="input-group my-2">
                <div class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                      </svg>

                </div>
                <div class="form-floating">
                    <input class="form-control"  type="text"  placeholder="Apellido" id="registerApellido"    name="apellido"  >
                    <label for="registerApellido">Apellido</label>

                </div>

            </div>

            <!-- email -->
            <div class="input-group" >
                <div class="input-group-text" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                        <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                        <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                      </svg>

                </div>
                <div class="form-floating">
                <input   class="form-control"  type="email" placeholder="Email"  id="registerEmail" name="gmail"   >
                  <label for="registerEmail">Email</label>
                </div>

            </div>


            <!-- password -->
            <div class="input-group my-2 ">
                <div  class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                        <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                      </svg>

                </div>
                <div class="form-floating" >
                    <input class="form-control"  type="text"  id="registerContraseña" name="password" placeholder="Contraseña" >
                       <label for="registerContraseña">Contraseña</label>
                </div>

            </div>

           <!-- Segunda Password -->

           <div class="input-group">
                <div  class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                        <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                      </svg>

                </div>
                <div class="form-floating" >
                    <input class="form-control"  type="text"  id="registerSegundaPassword" name="confirmpassword" placeholder="Contraseña" >
                       <label for="registerSegundaPassword">Contraseña</label>
                </div>

            </div>
           <!-- Boton de lo Registrarse -->
 
            <div  class="d-flex justify-content-center  my-2 " >
                <input  type="submit" class="  btn btn-warning w-50 " value="Registrar"  name="boton" >
            </div>

        </form>

    </div>
</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>