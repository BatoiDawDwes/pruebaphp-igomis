<?php
require dirname(__FILE__) . "/../vendor/autoload.php";

function dd($param){
    var_dump($param);
    exit();
}

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
return $whoops;





