<?php 
$fecha = date("d/m/Y");
$nombre = "Emanuel Cano";
$edad = 27;
$aPeliculas = array("Shrek", "Monster Inc", "Toy Story");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Ficha Personal</title>
</head>
<body>
<main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Ficha Personal</h1>
            </div>
        </div>
        <div class="row" >
            <div class="col-12">
                <table class="table table-hover border">
                <tbody>
                    <tr>
                    <th>Fecha:</th>
                    <td> <?php echo $fecha; ?> </td>
                    </tr>
                    <tr>
                    <th>Nombre y Apellido:</th>
                    <td> <?php echo $nombre; ?> </td>
                    </tr>
                    <tr>
                    <th>Edad:</th>
                    <td> <?php echo $edad; ?> </td>
                    </tr>
                    <tr>
                    <th>Peliculas:</th>
                    <td> <?php echo $aPeliculas[0]; ?><br> 
                         <?php echo $aPeliculas[1]; ?><br> 
                         <?php echo $aPeliculas[2]; ?><br> 
                    
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>  
    </main>
    
</body>
</html>