<?php
  use App\Models\Cats as Cats;
  $cats = new Cats();
  $cats-> post($_GET['name'],$_GET['breed'],$_GET['gender'],$_GET['birthday'],$_GET['cuteness']);
 ?>

<h1> Cat information uploaded! </h1>
