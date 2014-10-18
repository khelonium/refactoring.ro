<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 15/10/14
 * Time: 23:25
 */
namespace Refactoring\Time;

use DateTime;

class IntervalTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \DateTime
     */
    private $yesterday;
    /**
     * @var Interval
     */
    private $interval;

    /**
     * @var \DateTime
     */
    private $tomorrow;

    /**
     * @before
     */
    function itCanConstruct()
    {
        $this->interval = new Interval(new DateTime(), new DateTime() );
        $this->yesterday = new DateTime();
        $this->yesterday->sub(new \DateInterval('P1D'));

        $this->tomorrow = new DateTime();
        $this->tomorrow->add(new \DateInterval('P1D'));


    }

    /**
     * @test
     */
    function theInterval_knowsIsAfterAPastDate()
    {

        $this->assertTrue($this->interval->isAfter($this->yesterday));
        $this->assertFalse($this->interval->isAfter($this->tomorrow));

    }

    /**
     * @test
     */
    function theInterval_knowsIsBeforeAFutureDate()
    {

        $this->assertFalse($this->interval->isBefore($this->yesterday));
        $this->assertTrue($this->interval->isBefore($this->tomorrow));
        $this->assertFalse($this->interval->isAfter($this->tomorrow));
    }



    /**
     * @test
     */
    function theInterval_knowsItContainsADate()
    {
        $today = new \DateTime();
        $this->assertTrue($this->interval->contains($today));
        $this->assertFalse($this->interval->contains($this->yesterday));
    }


    /**
     * @test
     */
    function theInterval_knowsIfItOverlapsWithAnotherInterval()
    {


        $anotherInterval = new Interval($this->yesterday, $this->tomorrow);

        $this->assertTrue($this->interval->overlaps($anotherInterval));
    }

    /**
     * @test
     */
    function anIntervalIsCountable()
    {
        $this->assertEquals(1, count($this->interval));

        $anotherInterval = new Interval($this->yesterday, $this->tomorrow);
        $this->assertEquals(3, count($anotherInterval));

    }

    /**
     * @test
     */
    function anIntervalCanBeIterated()
    {
        $anotherInterval = new Interval($this->yesterday, $this->tomorrow);

        $counter = clone $this->yesterday;

        /** @var DateTime $day */
        foreach ($anotherInterval as $day) {
            $this->assertTrue($counter == $day);
            $counter->add(new \DateInterval('P1D'));
        }

    }




}
