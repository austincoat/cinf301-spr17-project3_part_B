<?php

  use App\Controllers;
  function route($controller, $action) {
    switch($controller) {
      case 'main':
        $controller = new App\Controllers\MainController();
      break;
      case 'Cats':
        $controller = new App\Controllers\CatController();
      break;
      case 'Cuteness':
        $controller = new App\Controllers\CutenessController();
      break;
      case 'Images':
        $controller = new App\Controllers\ImageController();
      break;
    }
    $controller->{ $action }();
  }
  $controllers = array('main' => ['home', 'error'],
                       'Cats' => ['cats', 'error','post','delete','update'],
                   'Cuteness' => ['cuteness', 'error'],
                     'Images' => ['images', 'error']
                                                );
  if (array_key_exists($controller, $controllers))
  {
    if (in_array($action, $controllers[$controller]))
    {
      route($controller, $action);
    }
    else
    {
      route('main', 'error');
    }
  }
  else
  {
    route('main' ,'error');
  }
?>
