<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css.min">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="aviso" role="switch" onclick="activar(this);">
    <label class="form-check-label" for="exampleCheck1">
        <a href="" class="text-decoration-none text-muted" data-bs-toggle="modal" data-bs-target="">Acepto terminos </a></label>
  </div>
  <input type="submit" id="registrar" value="Boton" name="Registrar"></input>
</form>
<script>
    //Desabilitar el boton de registrar
    document.getElementById('registrar').disabled=true;
    function activar(cb){
        if(cb.cheked)
        document.getElementById('registrar').disabled=false;
        else
        document.getElementById('registrar').disabled=true;
    }
</script>
</body>
</html>