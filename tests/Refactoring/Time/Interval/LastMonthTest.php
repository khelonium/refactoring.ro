<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 17/10/14
 * Time: 23:53
 */

namespace Refactoring\Time\Interval;


class LastMonthTest extends \PHPUnit_Framework_TestCase
{


    /**
     * @test
     */
    function itHasFirstAndLastFromLastMonth()
    {
        $lastMonth = new LastMonth();

        $this->assertEquals(new \DateTime('first day of last month'),$lastMonth->getStart());
        $this->assertEquals(new \DateTime('last day of last month 23:59:59'),$lastMonth->getEnd());
    }
}
