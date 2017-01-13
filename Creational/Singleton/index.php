<?php
namespace Patterns\Builder;
use Patterns\Singleton\HighLander;

require_once 'autoload.php';

$dunkan = HighLander::getInstance();
$dunkan->killAnotherHighlander();

echo $dunkan->killedHighLandersCount()."<br>";

$maclaud = HighLander::getInstance();
$maclaud->killAnotherHighlander();

echo $maclaud->killedHighLandersCount()."<br>";


$dunkanMaclaud = HighLander::getInstance();
$dunkanMaclaud->killAnotherHighlander();

echo $dunkanMaclaud->killedHighLandersCount()."<br>";
