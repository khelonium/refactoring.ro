<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Time\Interval;

use Refactoring\Time\Interval;

class ThisWeek extends Interval
{

    public function __construct()
    {
        $this->intervalStart = new \DateTime('Monday this week');
        $this->intervalEnd   = new \DateTime('Sunday this week 23:59:59');
    }
}
