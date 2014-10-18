<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Time\Interval;

use Refactoring\Time\Interval;

class ThisMonth extends Interval
{

    public function __construct()
    {

        $day = new \DateTime();
        $this->intervalStart = $day->modify('first day of this month midnight');
        $day = new \DateTime();
        $this->intervalEnd   = $day->modify('last day of this month 23:59:59');
    }
}
