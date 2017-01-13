<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.2017
 * Time: 18:23
 */

namespace Patterns\Singleton;


trait SingletonTrait
{
    private static $instance = null;

    /**
     * @return SingletonTrait
     */
    public static function getInstance()
    {
        if (static::$instance  === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct()
    {

    }

    private function __wakeup()
    {

    }

    private function __clone()
    {

    }

}