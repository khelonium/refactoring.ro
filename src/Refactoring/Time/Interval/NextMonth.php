<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Time\Interval;

use Refactoring\Time\Interval;

class NextMonth extends Interval
{

    public function __construct()
    {
        $this->intervalStart = new \DateTime('first day of next month');
        $this->intervalEnd   = new \DateTime('last day of next  month 23:59:59');
    }
}
