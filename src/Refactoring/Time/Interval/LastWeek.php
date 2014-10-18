<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Time\Interval;

use Refactoring\Time\Interval;

class LastWeek extends Interval
{

    public function __construct()
    {
        $this->intervalStart = new \DateTime('Monday Last Week');
        $this->intervalEnd   = new \DateTime('Sunday Last Week 23:59:59');
    }
}
