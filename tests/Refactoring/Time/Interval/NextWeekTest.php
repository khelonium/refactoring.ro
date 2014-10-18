<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 18/10/14
 * Time: 13:51
 */

namespace Refactoring\Time\Interval;


class NextWeekTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    function itHasThisMondayInThisSunday()
    {
        $nextWeek = new NextWeek();

        $this->assertEquals(new \DateTime('Monday Next Week'),$nextWeek->getStart());
        $this->assertEquals(new \DateTime('Sunday Next Week 23:59:59'),$nextWeek->getEnd());
    }
}
