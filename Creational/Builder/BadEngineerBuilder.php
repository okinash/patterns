<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.2017
 * Time: 16:34
 */

namespace Patterns\Builder;


class BadEngineerBuilder extends AbstractEngineerBuilder
{
    public function buildArms()
    {
        $this->engineer->setArms('Legs');
    }

    function buildHead()
    {
        $this->engineer->setHead('Head with no brain');
    }

    function buildLegs()
    {
        $this->engineer->setLegs('Arms');
    }

    function buildBody()
    {
        $this->engineer->setBody('Body');
    }
}