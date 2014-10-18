<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 17/10/14
 * Time: 23:38
 */

namespace Refactoring\Time\Interval;


class LastWeekTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    function itHasThisMondayInThisSunday()
    {
        $lastWeek = new LastWeek();

        $this->assertEquals(new \DateTime('Monday Last Week'),$lastWeek->getStart());
        $this->assertEquals(new \DateTime('Sunday Last Week 23:59:59'),$lastWeek->getEnd());
    }

}
