<?php
include 'include/conecta.php';
include 'include/querys.php';

?>
<!DOCTYPE html>
<html lang="es-mx">
<head>

    <title>Consulta dinamica</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/boostrap.met.css">

</head>
<body>
    <div class="container">
        <h2 class="text-center display-6">Tabla dinamica</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">ApellidoP</th>
                    <th scope="col">ApellidoM</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">UserName</th>
</tr>
</thead>
<tbody>
    <?php while($cortar = $Tusuariofj->fetch_array)?>
</table>
</div>
    <scrip src="js/boostrao.min.js"</scrip>
</body>
</html>