<?php
  use App\Models\CatHome as CatHome;
  $cats = new CatHome();
 ?>

<h1>
 Welcome To CatBook, a place for friends of cats to gather.
</h1>

<p>
  <?php
  $cats ->selectCats();
  $json = $_SESSION["Cats"];

  foreach ($json as $key => $value) {

    echo "<div class='background'> <div class='transbox'>  <img src=".$value['imgURL']." style='width:304px;height:228px;'>".
"<p>".$value["Name"].' the '. $value['Breed'].'<br></br>'." Born ".$value['Birthday'].'<br></br>'."</p></div></div>";

  }

?>
</p>
