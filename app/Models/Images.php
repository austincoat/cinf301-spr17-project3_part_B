<?php
namespace App\Models;
use App\Database\DB as DB;
class CatHome
{

  function selectCats()
  {
    ini_set('display_errors','on');

    $sql = "select Cats.Name, Cats.Breed, Cats.Birthday, CatImg.imgURL from Cats left join CatImg on CatImg.CatID = Cats.CatID ";
    $stmt = DB::run($sql);
    $_SESSION["Cats"] = $stmt->fetchAll();
    }
}
