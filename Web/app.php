<?php

include '../Lib/Autoload.php';
setlocale(LC_ALL, '');// la locale est regler sur europe/paris dans php.ini 
$app = new \lib\FrontEnd();
$app->run();
