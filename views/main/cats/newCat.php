<?php
  use App\Models\Cats as upload;
  $post = new upload();
  $post-> post($_GET['name'],$_GET['breed'],$_GET['gender'],$_GET['birthday'],$_GET['cuteness']);
 ?>

<h1> Cat Information uploaded! </h1>
