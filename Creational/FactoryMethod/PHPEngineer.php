<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 11.01.2017
 * Time: 12:52
 */

namespace Patterns\FactoryMethod;


class PHPEngineer extends AbstractEngineer
{
    public function writeUnitTests()
    {
        echo "phpunit -c app/";
    }

    public function writeCode()
    {
        echo "Doctrine, Symfony bla bla\r\n";
    }
}