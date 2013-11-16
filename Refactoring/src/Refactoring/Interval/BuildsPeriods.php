<?php
/**
 * @author Cosmin Dordea <cosmin.dordea@yahoo.com>
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 */


namespace Refactoring\Interval;

trait BuildsPeriods
{
    /**
     * Builds one year period. Takes any datetime to extract the year
     * @param \DateTime $datetime
     * @return \DatePeriod
     */
    protected function buildOneYearPeriod(\DateTime $datetime)
    {
        $start = new \DateTime($datetime->format('Y-01-01'));
        $end   = new \DateTime($datetime->format('Y-12-31'));

        $interval = new \DateInterval('P1M');

        return new \DatePeriod($start, $interval, $end);
    }
}