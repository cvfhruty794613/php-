<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Lista de precios</h1>
            </div>
        </div>
        <div class="row" >
            <div class="col-12">
                <table class="table table-hover border">
                <thead>    
                         <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Importe</th>
                            
                        </tr>
                </thead>
                <tbody>    
                        <tr>
                            <td>Fender Telecaster</td>
                            <td>20u.</td>
                            <td>$700.000</td>
                        </tr>
                        <tr>
                            <td>Pedal Over drive</td>
                            <td>30u.</td>
                            <td>$10.000</td>
                        </tr>
                        <tr>
                            <td>Amplificador Vox</td>
                            <td>30u.</td>
                            <td>$90.000</td>
                        </tr>
                        <tr>
                            <td colspan="2">Total:</td>
                            <td>$800.000</td>
                        </tr>
                </tbody>        
                </table>
            </div>
        </div>  
    </main>
</body>
</html>