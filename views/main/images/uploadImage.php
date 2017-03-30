<?php
  use App\Models\Images as upload;
  $img = new upload();
  $img-> post($_GET['breed'],$_GET['image'],$_GET['description'],$_GET['id']);
 ?>

<h1> Cat Photo uploaded! </h1>
