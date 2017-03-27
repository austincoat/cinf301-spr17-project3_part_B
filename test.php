<?php
require_once __DIR__.'/vendor/autoload.php';
require_once 'config.inc.php';
use App\Database\DB as DB;

ini_set('display_errors','on');

$sql = 'select COLUMN_NAME, DATA_TYPE, IS_NULLABLE from INFORMATION_SCHEMA.COLUMNS where table_name="orders"';
$stmt = DB::run($sql);
$row = $stmt->fetchAll();
var_dump($row);
