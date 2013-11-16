<?php
/**
 * @author Cosmin Dordea <cosmin.dordea@yahoo.com>
 */
namespace Refactoring\Interval;

/**
 * Facilitates working with interval.
 *
 */
interface IntervalInterface extends  \Countable
{

    /**
     * Checks if the interval overlaps another interval
     * @param IntervalInterface $interval
     * @return bool true if overal occurs
     */
    public function overlapsInterval(IntervalInterface $interval);


    /**
     * Check if the interval is before specified date
     * @param \DateTime $date
     * @return bool
     */
    public function isBefore(\DateTime $date);

    /**
     * Checks if the interval is after a specified date
     * @param \DateTime $date
     * @return bool
     */
    public function isAfter(\DateTime $date);

    /**
     * Checks if the interval contains the specified date
     * @param \DateTime $date
     * @return bool
     */
    public function contains(\DateTime $date);

    /**
     * Returns start day as \DateTime
     * @return \DateTime
     */
    public function getStart();


    /**
     * Returns end day as \DateTime
     * @return \DateTime
     */
    public function getEnd();


}
