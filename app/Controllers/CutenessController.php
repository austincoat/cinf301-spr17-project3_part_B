<?php
namespace App\Controllers;
use App\Renderer as Renderer;
class CutenessController
{
    public function cuteness()
    {
        $view = new Renderer('views/main/cuteness/');
        $view->render('cuteness.php');
    }
    public function error()
    {
        $view = new Renderer('views/main/cuteness/');
        $view->render('error.php');
    }
}
