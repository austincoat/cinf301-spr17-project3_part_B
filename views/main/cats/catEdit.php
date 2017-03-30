<?php
  use App\Models\Cats as Cats;
  $cats = new Cats();
  $cats-> update($_GET['uID'],$_GET['name'],$_GET['breed'],$_GET['gender'],$_GET['birthday'],$_GET['cuteness']);
 ?>

<h1> Cat information updated!</h1>
