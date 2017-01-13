<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 11.01.2017
 * Time: 12:52
 */

namespace Patterns\AbstractFactory;


class JavascriptEngineerFactory extends AbstractEngineerFactory
{
    static $allowedLevels = array(
        'Trainee',
        'Junior',
        'Middle',
        'Senior'
    );

    /**
     * @param $level
     * @return EngineerInterface
     * @throws \Exception
     */
    private function createEngineer($level)
    {
        if (!in_array($level, self::$allowedLevels)) {
            throw new \Exception("level  is not allowed");
        }
        $className = __NAMESPACE__ . DIRECTORY_SEPARATOR . "Engineers" . DIRECTORY_SEPARATOR . "Javascript" . DIRECTORY_SEPARATOR . $level . "Engineer";
        echo $level . " javascript engineer Created\r\n";
        return new $className;
    }

    /**
     * @return EngineerInterface
     */
    public function createJunior()
    {
        return $this->createEngineer('Junior');
    }

    /**
     * @return EngineerInterface
     */
    public function createTrainee()
    {
        return $this->createEngineer('Trainee');
    }

    /**
     * @return EngineerInterface
     */
    public function createMiddle()
    {
        return $this->createEngineer('Middle');
    }

    /**
     * @return EngineerInterface
     */
    public function createSenior()
    {
        return $this->createEngineer('Senior');
    }

}