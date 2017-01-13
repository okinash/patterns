<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.2017
 * Time: 19:28
 */

namespace Patterns\Adapter;


class IndianEngineerAdaptee extends IndianEngineer
{
    private $writeCodeMethod = 'typeOnKeyboard';
    private $writeUnitTestsMethod = 'runCode';
    use EngineerAdapteeTrait;
}