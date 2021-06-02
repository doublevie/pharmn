<?php

$dbname =   __DIR__ . '/data.sqlite';
$file_db = new PDO('sqlite:'.$dbname);
$file_db->exec("pragma synchronous = off;");

    
 ?>
