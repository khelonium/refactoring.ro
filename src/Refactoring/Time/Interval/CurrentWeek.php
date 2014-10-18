<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Time\Interval;

use Refactoring\Time\Interval;

class CurrentWeek extends Interval
{

    public function __construct()
    {
        $this->intervalStart = new \DateTime('Monday This Week');
        $this->intervalEnd = new \DateTime('Sunday This Week 23:59:59');
    }
}
