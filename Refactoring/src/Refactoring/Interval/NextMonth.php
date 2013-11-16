<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Interval;

use Refactoring\Interval;

class NextMonth extends Interval
{

    public function __construct()
    {
        $this->intervalStart = new \DateTime('first day of next month');
        $this->intervalEnd   = new \DateTime('end day of next  month');
    }
}
