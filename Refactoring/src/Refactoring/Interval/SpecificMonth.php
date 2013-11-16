<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Interval;

use Refactoring\Interval;

class SpecificMonth extends Interval
{

    public function __construct(\Datetime $day)
    {
        $this->intervalStart = new \DateTime($day->format('Y-m-01'));
        $this->intervalEnd   = new \DateTime($day->format('Y-m-t'));
    }
}
