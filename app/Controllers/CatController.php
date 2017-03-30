<?php
namespace App\Controllers;
use App\Renderer as Renderer;
class CatController
{
    public function cats()
    {
        $view = new Renderer('views/main/cats/');
        $view->render('cats.php');
    }
    public function post()
    {
        $view = new Renderer('views/main/cats/');
        $view->render('catupload.php');
    }
    public function delete()
    {
        $view = new Renderer('views/main/cats/');
        $view->render('catDelete.php');
    }
    public function update()
    {
        $view = new Renderer('views/main/cats/');
        $view->render('catEdit.php');
    }
    public function error()
    {
        $view = new Renderer('views/main/cats/');
        $view->render('error.php');
    }
}
