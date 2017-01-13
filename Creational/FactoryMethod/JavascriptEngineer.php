<?php
namespace Patterns\FactoryMethod;


class JavascriptEngineer extends AbstractEngineer
{
    public function writeUnitTests()
    {
        echo "npm run karma \r\n";
    }

    public function writeCode()
    {
       echo "React.createDomElement(button) \r\n";
    }
}