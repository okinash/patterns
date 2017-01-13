<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.2017
 * Time: 16:34
 */

namespace Patterns\Builder;


class GoodEngineerBuilder extends AbstractEngineerBuilder
{
    public function buildArms()
    {
        $this->engineer->setArms('Arms');
    }

    function buildHead()
    {
        $this->engineer->setHead('Head with great brain');
    }

    function buildLegs()
    {
        $this->engineer->setLegs('Legs');
    }

    function buildBody()
    {
        $this->engineer->setBody('Body');
    }
}