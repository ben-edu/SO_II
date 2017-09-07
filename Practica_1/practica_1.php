<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Práctica 1 | Sistemas Operativos II </title>
<meta name="description" content="Escalabilidad de los SOD |
Problemática: Cuellos de botella y sobrecarga en servidores |
Práctica: Liberar al sistema de trabajos que no sean
necesarios">
<meta name="author" content="Eduardo Flores Gallegos">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/main.css">

</head>

<body>
<div class="blog-masthead">
      <div class="container">
        <nav class="nav justify-content-center">
          <a class="nav-link" href="index.php">Inicio</a>
          <a class="nav-link active" href="#">Prácticas</a>
          <a class="nav-link" href="#">Recursos</a>
          <a class="nav-link" href="#">Acerca De</a>
        </nav>
      </div>
    </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title" align="center">Sistemas Operativos II</h1>
        <p class="lead blog-description" align="center">Prácticas de la Materia de Sistemas Operativos 2 <br>
        Profesor: Eduardo Flores Gallegos <br> <i>Práctica 1: Cuellos de botella y sobrecarga en servidores</i>  </p>
      </div>
    </div>

<div class="container">
<hr>
  <div class="row justify-content-between">
    <div class="col-lg-offset-2 col-lg-4 ">
        <div class="alert alert-primary" role="alert">
          Validación de lado del cliente
         </div>
      <form action="/action_page.php">
        Nombre:<br>
        <input type="text" name="nombre_c" placeholder="Nombre"
        class="form-control"  pattern="[A-Za-z]+" required>
        <br>
        EMail:<br>
        <input type="email" name="email_c" placeholder="Usuario"
        class="form-control"  pattern="[A-Za-z0-9@]+"required>
        <br>
        Teléfono<br>
        <input type="tel" name="tel_c" placeholder="Teléfono"
         class="form-control" maxlength="10" minlength="7"  pattern="[0-9]+" required>
        <br><br>
        <input type="submit" value="Enviar" class="btn btn-success">
      </form>
    </div>

    <div class="col-lg-4">
    <div class="alert alert-primary" role="alert">
          Validación de lado del servidor
         </div>
      <form action="exito.php" method="post">
        Nombre:<br>
        <input type="text" name="nombre_s" placeholder="Nombre"
        class="form-control">
        <br>
        EMail:<br>
        <input type="text" name="email_s" placeholder="Usuario"
        class="form-control" >
        <br>
        Teléfono<br>
        <input type="text" name="tel_s" placeholder="Teléfono"
         class="form-control">
        <br><br>
        <input type="submit" value="Enviar" class="btn btn-success">
      </form>

  </div>
  </div><hr>
  </div>
    <div class="row justify-content-center">
      <?php if(isset($_GET[ 'mensaje'])){
        switch($_GET[ 'mensaje']){
        case '1': echo "
          <div class='callout callout-danger'>
          <h4><i class='fa fa-fw fa-ban'></i> Error de Ingreso!</h4>
          <p>Tu nombre de usuario o contraseña son incorrectos.</p>
          </div>";
        break;

        case '2': echo "
          <div class='callout callout-danger'>
          <h4><i class='fa fa-fw fa-ban'></i> Validación correcta!</h4>
          <p>El formato del email es correcto</p>
          </div>";
        break;


        case '3': echo "
          <div class='callout callout-danger'>
          <h4><i class='fa fa-fw fa-ban'></i>  Error de Validación!</h4>
          <p>EL correo no tiene el formato establecido.</p>
          </div>";
        break;


      }}

    ?>
  </div>
 <footer class="footer">
      <div class="container">
        <span class="text-muted" align="center">Tecnológico Nacional de México | Instituto Tecnológico de Pabellón de Arteaga</span>
      </div>
    </footer>


</body>
</html>