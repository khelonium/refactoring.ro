<?php
/**
 * @author Cosmin Dordea <cosmin.dordea@yahoo.com>
 */
namespace Refactoring;

use \Refactoring\Interval\IntervalInterface;

/**
 * Facilitates working with interval.
 *
 * @author Cosmin Dordea <cosmin.dordea@yahoo.com>
 */
class Interval implements IntervalInterface,
    \IteratorAggregate
{

    /**
     * Start date of the interval
     * @var \DateTime $intervalStart
     */
    protected $intervalStart = null;

    /**
     * End date of the interval
     * @var \DateTime $intervalEnd
     */
    protected $intervalEnd   = null;

    /**
     * @param \DateTime $start
     * @param \DateTime $end
     * @return Interval
     */
    public function __construct(\DateTime $start, \DateTime $end)
    {
        $this->intervalStart = $start;
        $this->intervalEnd   = $end;
    }

    /**
     * @see Interval_Interface::overlaps()
     */
    public function overlaps(\DateTime $start, \DateTime $end)
    {
        $interval_start = $this->getStart();
        $interval_end   = $this->getEnd();

        $greater  = ($interval_start  >= $end) && ($start >= $interval_end);
        $lesser   = ($interval_start  < $end) && ($start < $interval_end) ;

        $overlaps = ($greater || $lesser);

        return $overlaps;


    }

    /**
     * Checks if the interval overlaps another interval
     * @param IntervalInterface $interval
     * @return bool true if overal occurs
     */
    public function overlapsInterval(IntervalInterface $interval)
    {
        $startDate = $interval->getStart();
        $endDate   = $interval->getEnd();

        return $this->overlaps($startDate, $endDate);
    }

    /**
     * @see Interval_Interface::isBefore()
     */
    public function isBefore(\DateTime $date)
    {
        $end = $this->getEnd();
        if ($date > $end) {
            return true;
        }

        return false;
    }

    /**
     * @param \DateTime $date
     * @return true
     */
    public function isAfter(\DateTime $date)
    {
        $start = $this->getStart();
        if ($date < $start) {
            return true;
        }

        return false;
    }

    /**
     * @see Interval_Interface::contains()
     */
    public function contains(\DateTime $date)
    {
        $start = $this->getStart();
        $end   = $this->getEnd();

        if ($date >= $start && $date <= $end) {
            return true;
        }

        return false;
    }


    /**
     * @see Interval_Interface::getStart()
     */
    public function getStart()
    {
        return $this->intervalStart;
    }

    /**
     * @see Interval_Interface::getEnd()
     */
    public function getEnd()
    {
        return $this->intervalEnd;
    }

    /**
     * Array of \DateTime objects
     */
    public function toArray()
    {
        $start    = $this->intervalStart;
        $end      = $this->intervalEnd;
        $period   = new \DatePeriod($start, new \DateInterval('P1D'), $end);
        $days     = array();

        foreach ($period as $current_day) {
            $days[] = $current_day;
        }

        $days[]  = $end;

        return $days;
    }

    /**
     * @see IteratorAggregate::getIterator()
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->toArray());
    }

    public function count()
    {
        return count($this->toArray());
    }

}
