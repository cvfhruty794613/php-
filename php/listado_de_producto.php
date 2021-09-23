<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProducto= array ();
$aProducto[] = array(
    "nombre"=> "Guitarra Electrica",
    "marca" => "Gibson",
    "modelo" => "SG",
    "stock" => 0,
    "precio" => 300000,
    );
 $aProducto[] = array(
     "nombre" => "Guitarra Acustica",
    "marca" => "Fender",
    "modelo" => "texas",
    "stock" => 10,
    "precio" =>22000,
);
$aProducto[] = array(
    "nombre" => "Pedal Chorus",
    "marca" => "VOX",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000,
);
$aProducto[] = array(
    "nombre" =>"Correa",
    "marca" =>"fender",
    "modelo" => "Blanca",
    "stock" => "200",
    "precio" => "2500",
);
$suma=0
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class= "container">
        <div class="row">
            <div class="col-12 text-center p-5">
                <h1>Listado de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Accion</th>
                    </tr>
                    <tr>
                        <?php 

                        for($i = 0; $i < count($aProducto); $i++){
                            echo "<tr>";
                            echo "<td>" . $aProducto[$i]["nombre"] ."</td>";
                            echo "<td>" . $aProducto[$i]["marca"] ."</td>";
                            echo "<td>" . $aProducto[$i]["modelo"] ."</td>";
                            echo $aProducto[$i]["stock"]==0? "<td>No hay stock</td>" : ($aProducto[$i]["stock"]>=10? "<td> Hay stock</td>": "<td> poco stock </td>");
                            echo "<td>" . $aProducto[$i]["precio"] ."</td>";
                            echo "<td><button class=\"btn btn-primary\">Comprar</button></td>";
                            echo "<tr>";
                            $suma+= $aProducto[$i]["precio"];
                        }
                        ?>
                    </tr>
                    <tr>
                        <th><h1 class="text-right"> <?php echo "El subtotal es : $". $suma; ?></h1> </th>
                    </tr>
                </table>
            </div>
        </div> 
    </div>
</body>
</html>