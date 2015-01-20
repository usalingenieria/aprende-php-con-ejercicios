<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
    <body>
    <?php
      include_once 'Animal.php';
      include_once 'Ave.php';
      include_once 'Pinguino.php';
      include_once 'Gato.php';

      $garfield = new Gato("macho", "romano");
      $tom = new Gato("macho");
      $lisa = new Gato("hembra");
      $silvestre = new Gato();
      
      echo $garfield->ficha();
      echo $tom->ficha();
      echo $lisa->ficha();
      echo $silvestre->ficha();

      $miLoro = new Ave();
      echo $miLoro->aseate();
      echo $miLoro->vuela();

      $pingu = new Pinguino("hembra");
      echo $pingu->aseate();
      echo $pingu->vuela();
    ?>
    </body>
</html>
