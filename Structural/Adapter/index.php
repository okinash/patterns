<?php
namespace Patterns\Adapter;
require_once 'autoload.php';


$team = array(
    new NormalEngineer(),
    new IndianEngineerAdaptee(),
    new FreelancerAdaptee()
);


foreach ($team as $developer){
    $developer->writeCode();
    $developer->writeUnitTests();
}
