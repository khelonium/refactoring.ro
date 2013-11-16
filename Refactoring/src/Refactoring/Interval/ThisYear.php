<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Interval;

use Refactoring\Interval;

class ThisYear extends Interval
{

    public function __construct()
    {
        $this->intervalStart = new \DateTime('first day of this year');
        $this->intervalEnd   = new \DateTime('last day of this year');
    }
}
