<?php
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/plantillas');
  $twig = new Twig_Environment($loader);

  $infoUsuario = $twig->loadTemplate('infoUsuario.html.twig');

  $datos = array (
    titulo => 'Información de usuarios',
    usuarios =>
      array (
        array (
          'nombre' => 'Elena',
          'apellido1' => 'Nito',
          'apellido2' => 'Del Bosque',
          'dni' => '1234567X'
        ),
        array (
          'nombre' => 'Leandro',
          'apellido1' => 'Gado',
          'dni' => '3546732Q'
        )
      )
  );

  $paginaUsuario = $infoUsuario->render($datos);
  echo $paginaUsuario;
