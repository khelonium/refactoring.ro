<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Interval;

class NextWeek extends \Refactoring\Interval
{

    public function __construct()
    {
        $this->intervalStart = new \DateTime('Monday next week');
        $this->intervalStart = new \DateTime('Sunday next week');
    }
}
