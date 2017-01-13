<?php
namespace Patterns\Prototype;
use Patterns\Prototype\Interfaces\EngineerInterface;

class SeniorEngineer implements EngineerInterface
{
    public function writeCode()
    {
        echo "I'm working\r\n";
    }

    public function writeUnitTests()
    {
        echo "Code covered by unit tests 95% \r\n";
    }

}