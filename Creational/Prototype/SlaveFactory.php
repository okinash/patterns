<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.2017
 * Time: 17:35
 */

namespace Patterns\Prototype;


use Patterns\Prototype\Interfaces\EngineerInterface;

class SlaveFactory
{
    /**
     * @var EngineerInterface
     */
    protected $junior;
    /**
     * @var EngineerInterface
     */
    protected $middle;
    /**
     * @var EngineerInterface
     */
    protected $senior;

    /**
     * SlaveFactory constructor.
     * @param EngineerInterface $junior
     * @param EngineerInterface $middle
     * @param EngineerInterface $senior
     */
    public function __construct(EngineerInterface $junior, EngineerInterface $middle, EngineerInterface $senior)
    {
        $this->junior = $junior;
        $this->middle = $middle;
        $this->senior = $senior;
    }

    /**
     * @return EngineerInterface
     */
    public function getJunior()
    {
        return clone $this->junior;
    }

    /**
     * @return EngineerInterface
     */
    public function getMiddle()
    {
        return clone $this->middle;
    }

    /**
     * @return EngineerInterface
     */
    public function getSenior()
    {
        return clone $this->senior;
    }
}