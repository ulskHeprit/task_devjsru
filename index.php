<?php
spl_autoload_register(function ($className) {
    require_once(__DIR__ . "/classes/$className.php");
});

$strDogNameError = 'Wrong dog name, available names => ( dachshund, plushlabrador, pug, rubberdachshund, shibainu )'
    . PHP_EOL;
$strCommandError = 'Wrong command for dog, available commands => ( sound, hunting )' . PHP_EOL;

$dogName = $argv[1] ?? die($strDogNameError);
$command = $argv[2] ?? die($strCommandError);

switch ($dogName) {
    case 'dachshund':
        $dog = new Dachshund();
        break;
    case 'plushlabrador':
        $dog = new PlushLabrador();
        break;
    case 'pug':
        $dog = new Pug();
        break;
    case 'rubberdachshund':
        $dog = new RubberDachshundWithSpeaker();
        break;
    case 'shibainu':
        $dog = new ShibaInu();
        break;
    default:
        die($strDogNameError);
}
//    echo "ok\n";
switch ($command) {
    case 'sound':
        echo $dog->getSound() . PHP_EOL;
        break;
    case 'hunting':
        echo $dog->hunting() . PHP_EOL;
        break;
    default:
        die($strCommandError);
}

