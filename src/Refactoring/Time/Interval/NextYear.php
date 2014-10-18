<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Time\Interval;

use Refactoring\Time\Interval;

class NextYear extends Interval
{

    public function __construct()
    {
        $nextYear = new \DateTime('next year');
        $this->intervalStart = new \DateTime($nextYear->format('Y-01-01'));
        $this->intervalEnd   = new \DateTime($nextYear->format('Y-12-31 23:59:59'));

    }
}
