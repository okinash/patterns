<?php
/**
 * Highlander - there can be only one
 * Горец- должен остаться только один
 */
namespace Patterns\Singleton;

class HighLander
{
    use SingletonTrait;
    private $highlandersKilled = 0;

    public function killAnotherHighlander()
    {
        $this->highlandersKilled++;
    }

    public function killedHighLandersCount()
    {
        return $this->highlandersKilled;
    }


}