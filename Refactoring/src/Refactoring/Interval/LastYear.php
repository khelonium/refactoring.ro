<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */

namespace Refactoring\Interval;

use Refactoring\Interval;

class LastYear extends Interval
{

    public function __construct()
    {
        $this->intervalStart = new \DateTime('first day of last year');
        $this->intervalEnd   = new \DateTime('last day of last year');
    }
}
