<?php
include "../servidor/server.php";
$consultar=mysqli_query($conectar," SELECT * FROM `registarcasa`");
$array=mysqli_fetch_array($consultar)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>

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
            background-color: rgba(0, 0, 0, 0.072);
            border-bottom: 3px #ffc107 solid  ;
        }

        .sesion-2{
            background-color: rgba(245, 245, 220, 0.3);
            padding: 10px;
        }
    </style>

    <header>
      

    <nav class="navbar navbar-dark  navbar-expand-lg" >
        <a class=" mx-5"  href="../front.html"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-square-fill  text-warning bg-light rounded " viewBox="0 0 16 16">
            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
          </svg></a>
        <div class="container" >
           <a href="" class="navbar-brand fs-3 fw-bold text light">Casas en <span class="text-warning" >Venta</span> </a>
        </div>
    </nav>
</header>


<main>
    <section>
        <div class="container">
            <div class="crud" >
                <h1 class=" fw-bold  text-center  text-light" >
                    Casas que estan en <span class="text-warning" > <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="  text-success bi bi-coin" viewBox="0 0 16 16">
                        <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                      </svg> venta</span> 
                </h1>

            </div>
        </div>
    </section>

    <div class="container" >

    <section class="sesion-2" >
         <div class="row  " >
         <?php
             

             foreach($consultar as $fila ){
           ?>
                
            <div class="col d-flex justify-content-center ">
            
           

             


            <div class="card" style="width: 18rem;" >
                <img src="https://images.unsplash.com/photo-1572120360610-d971b9d7767c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTF8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Nombre: <?php echo $fila['nombre']  ?> </h5>
                  <h6 class="card-text" >Numero: <?php  echo $fila['telefono']  ?> </h6>
                  <h6 class="card-text" >Direccion: <?php  echo $fila['direccion']  ?> </h6>

                  <h6 class="card-text"> Descripcion: <?php echo $fila['descripcion'] ?></h6>
                </div>
              </div>

            </div>
            <?php } ?>
        </div>


    </section>
</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>