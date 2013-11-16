<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Interval;

use Refactoring\Interval;

class LastMonth extends Interval
{

    public function __construct()
    {
        $this->intervalStart = new \DateTime('first day of last month');
        $this->intervalEnd   = new \DateTime('end day of last month');
    }
}
