<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Time\Interval;

use Refactoring\Time\Interval;

class LastMonth extends Interval
{

    public function __construct()
    {
        $this->intervalStart = new \DateTime('first day of last month');
        $this->intervalEnd   = new \DateTime('last day of last month 23:59:59');
    }
}
