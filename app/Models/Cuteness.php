<?php
namespace App\Models;
use App\Database\DB as DB;
class Cuteness
{

  function selectCuteness($id)
  {
    ini_set('display_errors','on');

    $sql = "select Cats.Name,Cats.CatID, Cuteness.CuteID,Cuteness.Description, CatImg.imgURL,Cuteness.why,Cuteness.Chance from Cats left join CatImg on CatImg.CatID = Cats.CatID left join Cuteness on Cuteness.CuteID = Cats.Cuteness WHERE Cats.CatID = $id ";
    $stmt = DB::run($sql);
    $_SESSION["Cuteness"] = $stmt->fetchAll();
    }
}
