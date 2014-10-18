<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 18/10/14
 * Time: 20:08
 */

namespace Refactoring\Time\Interval;


class ThisWeekTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    function itHasThisMondayAndThisSunday()
    {
        $thisWeek = new ThisWeek();

        $this->assertEquals(new \DateTime('Monday This Week'),$thisWeek->getStart());
        $this->assertEquals(new \DateTime('Sunday This Week 23:59:59'),$thisWeek->getEnd());
    }
}
