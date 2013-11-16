<?php
/**
 *
 * @link      http://github.com/khelonium/zentrack
 * @license  New BSD
 * @category Refactor
 * @package   Interval
 */

namespace Refactor\Interval;
use Refactoring\Interval\IntervalInterface;

/**
 * Can be used to easily implement interval interface.
 * @author Cosmi Dordea
 * @category Refactor
 * @package Interval
 */
trait HasInterval
{

    /**
     * @var IntervalInterface
     */
    private  $interval = null;

    /**
     * Checks if the interval contains the specified date
     * @param \DateTime $date
     * @return bool
     */
    public function contains(\DateTime $date)
    {
        return $this->interval->contains($date);
    }

    /**
     * Checks if the interval overlaps another interval
     * @param IntervalInterface $interval
     * @return bool true if overal occurs
     */
    public function overlapsInterval(IntervalInterface $interval)
    {
        return $this->interval->overlapsInterval($interval);
    }

    /**
     * Check if the interval is before specified date
     * @param \DateTime $date
     * @return bool
     */
    public function isBefore(\DateTime $date)
    {
        return $this->interval->isBefore($date);

    }

    /**
     * @param \DateTime $date
     * @return true
     */
    public function isAfter(\DateTime $date)
    {
        return $this->interval->isAfter($date);
    }

    /**
     * Returns start day as \DateTime
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->interval->getStart();
    }

    /**
     * Returns end day as \DateTime
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->interval->getEnd();
    }

    public function count()
    {
        return $this->toArray();
    }

    protected function setInterval(IntervalInterface $interval)
    {
        $this->interval = $interval;
    }

    /**
     * @return IntervalInterface
     */
    protected function getInterval()
    {
        return $this->interval;
    }
}
