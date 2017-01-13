<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.2017
 * Time: 19:28
 */

namespace Patterns\Adapter;


class FreelancerAdaptee extends Freelancer
{
    private $writeCodeMethod = 'searchGoogleExistingSolution';
    private $writeUnitTestsMethod = 'useMagic';
    use EngineerAdapteeTrait;
}