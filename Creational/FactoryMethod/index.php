<?php
namespace Patterns\FactoryMethod;
require_once 'autoload.php';

//Abstract Factory Demo
$language = 'PHP';

$engineer = AbstractEngineer::create($language);

$engineer->writeCode();
$engineer->writeUnitTests();