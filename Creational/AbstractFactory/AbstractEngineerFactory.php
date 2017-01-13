<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 11.01.2017
 * Time: 18:06
 */

namespace Patterns\AbstractFactory;


abstract class AbstractEngineerFactory
{
    abstract function createJunior();
    abstract function createTrainee();
    abstract function createMiddle();
    abstract function createSenior();
}