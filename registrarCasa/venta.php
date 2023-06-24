<?php

 include "../servidor/server.php";
if(isset($_POST['boton'])){
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $descripcion=$_POST['descripcion'];
    $insectar=mysqli_query($conectar,"INSERT INTO  `registarcasa` (`nombre`,`telefono`,`direccion`,`descripcion`) VALUES ('$nombre','$telefono','$direccion','$descripcion') ");

}

;
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <style>
        body{
            background: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(https://img.freepik.com/free-photo/japandi-living-room-interior-design_53876-145502.jpg?w=996&t=st=1686756383~exp=1686756983~hmac=e6f73bc0beaf5e29b257d803dda1663fce6652e83e5f9cdbf0bb03ad295af438);
            background-size: cover;
            background-position: fixed;
            font-size: 20px;

        }

        .navbar{
            background-color: rgba(0, 0, 0, 0.089);S
            border-bottom: 3px #ffc107 solid  ;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light" >
    <a class=" mx-5"  href="../front.html"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-square-fill  text-warning bg-light rounded " viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg></a>
        <div class="container">
            
            <a class="navbar-brand fw-bold text-light  fs-3 "  href=""><span class="navbar-togglr-icon" ></span>REGISTER   <span class="text-warning" >CASA </span> </a>

        </div>
    </nav>


    <main>
        <section>
            <div class="container">
                <div class="d-flex justify-content-center align-items-center vh-100" >

                    <div class="w-75" >

                        <form action="" method="post" >
                            <h1 class="text-center text-light  fw-bold"  >REGISTRA  <span class="text-warning" > LA CASA</span> </h1>
                            <!-- propietario -->
                            <div class="input-group ">
                                <div class="input-group-text" >
                                
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                      </svg>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" type="text"  id="propietario" name="nombre"  placeholder="Nombre de propietario"  >
                                    <label for="propietario">Nombre del propietario</label>

                                </div>

                            </div>

                            <div class="input-group my-2 " >
                                <div class="input-group-text" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                      </svg>
                                   
                                </div>
                               <div class="form-floating">
                                <input  class="form-control" type="tel" placeholder="Escribe tu numero de telefono"  name="telefono" id="numero">
                                <label for="numero">Numero de telefono</label>

                               </div>
                            </div>

                            <div class="input-group my-2 ">
                                <div  class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                                        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                                      </svg>
                                </div>
                            <div class="form-floating">
                                <input  class="form-control" type="text" placeholder="Escribe tu direccion"  name="direccion"  id="direccion" >
                                <label for="direccion">Escribe tu Direccion</label>
                            </div>

                            </div>

                            <div >
                                <!-- <label for="description" >Escribe la descripcion de la Casa</label> -->
                                <textarea class="form-control"  name="descripcion" id="descripcion" cols="50" placeholder="Escribe la descripcion de la Casa"  rows="10"></textarea>

                            </div>
                            <div class="text-center my-1" >
                                <input class="btn btn-warning w-75" name="boton"  type="submit" value="Enviar Datos" >
                            </div>

                            
                        </form>
                    </div>

                    </div>

                      </div>

        </section>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>