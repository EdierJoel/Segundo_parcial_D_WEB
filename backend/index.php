<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/login.css">

</head>
  <body class="text-center">
    <form class="form-signin">
  <img class="mb-4" src="../img/logotipo.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesion</h1>
  <label for="inputEmail" class="sr-only">Correo Electonico</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Recuerdame
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="button" id="buttonSing">Ingresar</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
   $("#buttonSing").click(function (){
    // Obtener Valor del email
    
    let correo = $("inputEmail").val();
    // Obtener el valor de Password
    
    let correo = $("inputPassword").val();
    // TEST: -- aler("Tu correo es: " + correo + "y tu password es:" + password +);
    
    let obj = {
      "accion" : "login",
      "usuario" : correo,
      "password" : password
    };
    $.post("includes/_funciones.php", obj, function);
        
          //let obj = {}; Con esto ya se clasifica como objeto; no es optimo pero es una notacion oreintada a objetos, emulando cosas como clases 
            // "atributo" : "valor",
            // "atributo" : "valor",
            // "atributo" : "valor" 
            // Al final ya no llevara coma
  
  });
  </script>
</body>
</html>