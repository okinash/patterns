<?php
namespace Patterns\FactoryMethod;

use Patterns\FactoryMethod\Interfaces\EngineerInterface;

abstract class AbstractEngineer
{
    /**
     * @param $language
     * @return EngineerInterface
     */
    public static function create($language)
    {
        $className = __NAMESPACE__ . DIRECTORY_SEPARATOR . $language . "Engineer";

        return new  $className;
    }

    abstract function writeCode();

    abstract function writeUnitTests();
}