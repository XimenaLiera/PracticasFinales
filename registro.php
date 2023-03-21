<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<?php include "include/conecta.php";?>
<?php include "include/acciones.php";?>
<body>
    <div class="container m-o content-justify-center py-2">
        <h1 class="text-success">Registro</h1>
    </div>
    <form id="Registro" action="<?php echo $SERVER['php_self'];?>" method="post">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="ApellidoP" class="form-control" placeholder="ApellidoP" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="ApellidoM" class="form-control" placeholder="ApellidoM" required>
            </div>
        </div>
      
        </div>
     
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="date" name="Fecha" class="form-control" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="email" name="email" placeholder="email" class="form-control" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="password" name="password" placeholder="password" class="form-control" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="submit" value="registro" name="btn" class="btn btn-success">
            </div>
        </div>
    </form>    
</body>
