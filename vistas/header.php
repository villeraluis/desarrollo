<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <!-- Bootstrap CSS -->
    
      
      <link rel="stylesheet" href="vistas/css/bootstrap.min.css" >
      
     
    
     



    <title>AppDesarrollo</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
    <ul class="navbar-nav mr-auto">
    <?php if(!empty($_SESSION)){?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?accion=lecturas&usuario=1">Lecturas</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?accion=preguntas">Preguntas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?accion=reportes">Reportes</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <div class="dropdown ">
     
   <a class="btn btn-secondary dropdown-toggle "  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $_SESSION['correo'] ?></a>
   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
    
    <a class="dropdown-item" href="index.php?accion=salir">Salir</a>
  </div>
      <?php }else{?>
        
        </ul>

  <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Registro
  </a>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="index.php?accion=registrarEstudiante">Registrarse</a>
    <a class="dropdown-item" href="index.php?accion=login">Ingresar</a>
    
    
  </div>

      <?php }?>
</div>
    </form>
  </div>
</nav>