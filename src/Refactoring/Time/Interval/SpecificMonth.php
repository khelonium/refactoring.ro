<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Time\Interval;

use Refactoring\Time\Interval;

class SpecificMonth extends Interval
{

    public function __construct(\Datetime $day)
    {
        $this->intervalStart = new \DateTime($day->format('Y-m-01 00:00:00'));
        $this->intervalEnd   = new \DateTime($day->format('Y-m-t 23:59:59'));
    }
}
