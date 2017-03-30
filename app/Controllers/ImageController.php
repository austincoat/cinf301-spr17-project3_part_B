<?php
namespace App\Controllers;
use App\Renderer as Renderer;
class ImageController
{
    public function images()
    {
        $view = new Renderer('views/main/images/');
        $view->render('images.php');
    }
    public function error()
    {
        $view = new Renderer('views/main/');
        $view->render('error.php');
    }
}