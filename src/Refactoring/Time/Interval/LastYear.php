<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Time\Interval;

use Refactoring\Time\Interval;

class LastYear extends Interval
{

    public function __construct()
    {
        $lastYear = new \DateTime('1 year ago');
        $this->intervalStart = new \DateTime($lastYear->format('Y-01-01'));
        $this->intervalEnd   = new \DateTime($lastYear->format('Y-12-31 23:59:59'));
    }
}
