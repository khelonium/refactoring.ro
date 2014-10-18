<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Time\Interval;

use Refactoring\Time\Interval;

class ThisYear extends Interval
{

    public function __construct()
    {
        $today = new \DateTime();
        $this->intervalStart = new \DateTime($today->format('Y-01-01'));
        $this->intervalEnd   = new \DateTime($today->format('Y-12-31 23:59:59'));
    }
}
