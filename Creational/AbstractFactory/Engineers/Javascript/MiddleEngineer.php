<?php
namespace Patterns\AbstractFactory\Engineers\Javascript;
use Patterns\AbstractFactory\Interfaces\EngineerInterface;
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 11.01.2017
 * Time: 12:49
 */
class MiddleEngineer implements EngineerInterface
{
    public function writeCode()
    {
        echo "Writing code \r\n";
        $failability = rand(0,10);
        if($failability>8){
            echo "Client got errors in IE8 \r\n";
        }
    }

    public function writeUnitTests()
    {
        echo "npm run karma? \r\n";
    }

}