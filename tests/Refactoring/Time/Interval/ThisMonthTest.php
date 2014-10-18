<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 18/10/14
 * Time: 20:06
 */

namespace Refactoring\Time\Interval;


class ThisMonthTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    function itHasFirstAndLastFromThisMonth()
    {
        $thisMonth = new ThisMonth();

        $this->assertEquals(new \DateTime('first day of this month 00:00:00'),$thisMonth->getStart());
        $this->assertEquals(new \DateTime('last day of this month 23:59:59'),$thisMonth->getEnd());
    }

}
