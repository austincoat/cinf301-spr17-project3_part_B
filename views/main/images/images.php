<?php
  use App\Models\CatHome as CatHome;
  $cats = new CatHome();
 ?>

<h1>
  Simply photos, None of the fluff!<br></br> Well, none of the fluff you're not here to see.
</h1>

<p>
  <?php
  $cats ->selectCats();
  $json = $_SESSION["Cats"];

  foreach ($json as $key => $value) {
    if($value['imgURL'] != NULL)
    {
      echo "<div class='background'> <div class='transbox'>  <img src=".$value['imgURL']." style='width:304px;height:228px;'></div></div>";
    }
  }

?>
</p>
