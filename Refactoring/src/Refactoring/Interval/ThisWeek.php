<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Interval;

use Refactoring\Interval;

class ThisWeek extends Interval
{

    public function __construct()
    {
        $this->intervalStart = new \DateTime('Monday this week');
        $this->intervalStart = new \DateTime('Sunday this week');
    }
}
