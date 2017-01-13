<?php
namespace Patterns\Prototype;
use Patterns\Prototype\Interfaces\EngineerInterface;
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
            echo "Production Server is down \r\n";
        }
    }

    public function writeUnitTests()
    {
        echo "Googling PHPUnit \r\n";
    }

}