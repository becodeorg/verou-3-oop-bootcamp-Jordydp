<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include './includes/autoloader.inc.php';


$jian = new Students("jian", 12);


echo $jian->score;

