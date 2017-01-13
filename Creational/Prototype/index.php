<?php
namespace Patterns\Prototype;

require_once 'autoload.php';

$slaveFactory = new SlaveFactory(new JuniorEngineer, new MiddleEngineer(), new SeniorEngineer());

$senior = $slaveFactory->getSenior();
$senior->writeCode();
$senior->writeUnitTests();


$middle = $slaveFactory->getMiddle();
$middle->writeCode();
$middle->writeUnitTests();


$junior = $slaveFactory->getJunior();
$junior->writeCode();
$junior->writeUnitTests();