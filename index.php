<?php

spl_autoload_register(function ($className) {
    require_once("classes/$className.php");
});


$taksa = new Pug();
//$taksa = new Dachshund();
echo $taksa->getSound();
echo $taksa->hunting();

