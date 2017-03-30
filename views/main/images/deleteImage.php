<?php
  use App\Models\Images as Images;
  $image = new Images();
  $image-> delete($_GET['id']);
 ?>

<h1> Cat photo removed! Oh my! </h1>
