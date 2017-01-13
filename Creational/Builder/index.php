<?php
namespace Patterns\Builder;
require_once 'autoload.php';

$engineerDirector = new EngineerDirector();

$engineerDirector->setBuilder(new GoodEngineerBuilder());
echo $engineerDirector->buildEngineer()->getEngineer();

$engineerDirector->setBuilder(new BadEngineerBuilder());
echo $engineerDirector->buildEngineer()->getEngineer();