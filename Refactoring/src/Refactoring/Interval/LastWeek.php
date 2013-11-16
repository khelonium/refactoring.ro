<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Interval;

use Refactoring\Interval;

class CurrentWeek extends Interval
{

    public function __construct()
    {
        $this->intervalStart = new \DateTime('Monday Last Week');
        $this->intervalStart = new \DateTime('Sunday Last Week');
    }
}
