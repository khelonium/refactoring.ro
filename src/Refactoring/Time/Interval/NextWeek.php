<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Time\Interval;

use Refactoring\Time\Interval;

class NextWeek extends Interval
{

    public function __construct()
    {
        $this->intervalStart = new \DateTime('Monday next week');
        $this->intervalEnd = new \DateTime('Sunday next week 23:59:59');
    }
}
