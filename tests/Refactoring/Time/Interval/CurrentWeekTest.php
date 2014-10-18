<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 17/10/14
 * Time: 23:34
 */

namespace Refactoring\Time\Interval;


class CurrentWeekTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function itHasThisMondayInThisSunday()
    {
        $thisWeek = new CurrentWeek();

        $this->assertEquals(new \DateTime('Monday This Week'),$thisWeek->getStart());
        $this->assertEquals(new \DateTime('Sunday This Week 23:59:59'),$thisWeek->getEnd());
    }
}
