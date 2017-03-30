<?php
  use App\Models\Cats as Cats;
  $cats = new Cats();
  $cats-> remove($_GET['deleteID']);
 ?>

<h1> Cat information removed! Oh my! </h1>
