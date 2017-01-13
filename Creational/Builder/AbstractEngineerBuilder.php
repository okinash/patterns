<?php
namespace Patterns\Builder;

abstract class AbstractEngineerBuilder
{
    /**
     * @var Engineer
     */
    protected $engineer;

    public function create(){
        $this->engineer = new Engineer();
    }

    public function getEngineer(){
        return $this->engineer;
    }

    abstract function buildHead();
    abstract function buildLegs();
    abstract function buildArms();
    abstract function buildBody();
}