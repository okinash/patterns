<?php
namespace Patterns\AbstractFactory;
require_once 'autoload.php';

//Abstract Factory Demo
$language = 'Javascript';
switch ($language) {
    case 'PHP':
        $factory = new PHPEngineerFactory();
        break;
    case 'Javascript':
        $factory = new JavascriptEngineerFactory();
        break;
    default :
        die('No language specified');
}

for ($i = 0; $i < 2; $i++) {
    $seniorEngineer = $factory->createSenior();
    $seniorEngineer->writeCode();
    $seniorEngineer->writeUnitTests();
}

for ($i = 0; $i < 5; $i++) {
    $middleEngineer = $factory->createMiddle();
    $middleEngineer->writeCode();
    $middleEngineer->writeUnitTests();
}

for ($i = 0; $i < 10; $i++) {
    $juniorEngineer = $factory->createJunior();
    $juniorEngineer->writeCode();
    $juniorEngineer->writeUnitTests();
}

for ($i = 0; $i < 10; $i++) {
    $traineeEngineer = $factory->createTrainee();
    $traineeEngineer->writeCode();
    $traineeEngineer->writeUnitTests();
}

//End Abstract Factory demo


