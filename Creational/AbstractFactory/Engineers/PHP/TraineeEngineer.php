<?php
namespace Patterns\AbstractFactory\Engineers\PHP;
use Patterns\AbstractFactory\Interfaces\EngineerInterface;
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 11.01.2017
 * Time: 12:48
 */
class TraineeEngineer implements EngineerInterface
{
    public function writeCode()
    {
        echo "Writing code \r\n";
        $answerability = rand(0,10);
        if($answerability > 3){
            echo "Please help me! \r\n";
        }
    }

    public function writeUnitTests()
    {
        echo "What? \r\n";
    }

}