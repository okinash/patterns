<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.2017
 * Time: 13:06
 */

namespace Patterns\Builder;


class Engineer
{
    protected $body;
    protected $head;
    protected $arms;
    protected $legs;

    public function setBody($part)
    {
        $this->body = $part;
    }

    public function setHead($part)
    {
        $this->head = $part;
    }

    public function setArms($part)
    {
        $this->arms = $part;
    }

    public function setLegs($part)
    {
        $this->legs = $part;
    }

    public function __toString()
    {
        return sprintf("Engineer info : \r\n 
               Head: %s \r\n
               Arms: %s \r\n
               Body: %s \r\n
               Legs: %s \r\n", $this->head, $this->arms, $this->body, $this->legs);
    }
}