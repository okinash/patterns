<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.2017
 * Time: 19:24
 */

namespace Patterns\Adapter;


trait EngineerAdapteeTrait
{
    public function writeCode(){
        $method =  $this->writeCodeMethod;
        return $this->$method();
    }

    public function writeUnitTests(){
        $method =  $this->writeUnitTestsMethod;
        return $this->$method();
    }

}