<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.2017
 * Time: 16:45
 */

namespace Patterns\Builder;


class EngineerDirector
{
    /**
     * @var AbstractEngineerBuilder
     */
    protected $builder;

    public function setBuilder(AbstractEngineerBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildEngineer()
    {
        $this->builder->create();
        $this->builder->buildArms();
        $this->builder->buildBody();
        $this->builder->buildHead();
        $this->builder->buildLegs();
        return $this;
    }

    public function getEngineer(){
        return $this->builder->getEngineer();
    }
}