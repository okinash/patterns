<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.2017
 * Time: 19:21
 */

namespace Patterns\Adapter;


class NormalEngineer
{
    public function writeCode(){
        echo "write code \r\n";
    }

    public function writeUnitTests(){
        echo "write unit tests \r\n";
    }

}