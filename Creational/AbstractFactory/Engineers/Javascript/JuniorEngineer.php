<?php
namespace Patterns\AbstractFactory\Engineers\Javascript;
use Patterns\AbstractFactory\Interfaces\EngineerInterface;
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 11.01.2017
 * Time: 12:48
 */
class JuniorEngineer implements EngineerInterface
{
    public function writeCode()
    {
        echo "Writing code \r\n";
        $failability = rand(0,10);
        if($failability>5){
            echo "Client not works in Firefox \r\n";
        }
    }

    public function writeUnitTests()
    {
        echo "Googling karma \r\n";
    }

}