<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Note App</title>
  <!--STYLES-->
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/styles.css">
  <!--BOOTSTRAP CDN-->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- FONT AWESOME-->
  <link rel="stylesheet" href="css/all.css">
  <?php
  $archive = basename($_SERVER['PHP_SELF']); //retorna el nombre del archive actual
  $pag = str_replace(".php", "", $archive);  //primero lo que quieres buscar, por qué reemplazar, y fuente de datos
  ?>
</head>

<body class="<?php echo $pag ?>">
  <!--NAVIGATION-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container identifier">
      <a class="nav-link active navbar-brand nav-span" href="/notes-remake/">Note <span class="span">App</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-link active navbar-brand nav-spant ml-3" href="/notes-remake/notes.php">Notes <span class="sr-only">(current)</span></a>
        </div>
      </div>
    </div>
  </nav>