<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 18/10/14
 * Time: 13:48
 */

namespace Refactoring\Time\Interval;


class NextMonthTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    function itHasNextMonthStartAndEnd()
    {
        $nextMonth = new NextMonth();

        $this->assertEquals(new \DateTime('first day of next month'),$nextMonth->getStart());
        $this->assertEquals(new \DateTime('last day of next month 23:59:59'),$nextMonth->getEnd());
    }
}
