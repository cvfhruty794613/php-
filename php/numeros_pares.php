<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Numeros Pares </title>
</head>
<body>

    <main class="container">
    <div class="row">
            <div class="col-12 py-2">
                <h2> 1)Sucesion del 1 al 100</h2>
            </div>
        </div>
        <div class="row" >
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <td>
                        <?php 
                            for ($i = 0 ; $i <= 100;$i++) {
                                echo $i . " ";
                                }
                                ?>
                        </td>
                    </tr>
                 </table>
            </div>
        </div>
    <div class="row">
            <div class="col-12 py-2">
                <h2> 2)Sucesion numeros pares</h2>
            </div>
        </div>
        <div class="row" >
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <td>
                        <?php 
                            for ($i = 2 ; $i <= 100;$i+=2) {
                                echo $i . " ";
                                }
                                ?>
                        </td>
                    </tr>
                 </table>
            </div>
        </div>
    <div class="row">
            <div class="col-12 py-2">
                <h2>3)Sucesion break al 60</h2>
            </div>
        </div>
        <div class="row" >
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <td>
                        <?php
                            for ($i = 2 ; $i < 100; $i+=2) { 
                                echo $i . " ";
                                if($i== 60) {
                                break;
                                }   
                            }        
                            ?>
                        </td>
                    </tr>
                 </table>
            </div>
        </div>
    </main>
    
</body>
</html>