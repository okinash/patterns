<?php
namespace Patterns\AbstractFactory\Engineers\Javascript;
use Patterns\AbstractFactory\Interfaces\EngineerInterface;

class SeniorEngineer implements EngineerInterface
{
    public function writeCode()
    {
        echo "Implementing ReactJS feature\r\n";
    }

    public function writeUnitTests()
    {
        echo "100/100 tests passed \r\n";
    }

}