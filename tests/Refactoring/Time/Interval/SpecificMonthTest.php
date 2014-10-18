<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 18/10/14
 * Time: 19:56
 */

namespace Refactoring\Time\Interval;


class SpecificMonthTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    function itHasSpecificMonthStartAndEnd()
    {
        $specificMonth = new SpecificMonth(new \DateTime('next month'));

        $this->assertEquals(new \DateTime('first day of next month midnight'),$specificMonth->getStart());
        $this->assertEquals(new \DateTime('last day of next month 23:59:59'),$specificMonth->getEnd());
    }

    function itCanInitWithFebruary2014()
    {
        $februaryDay = new \DateTime('2014-02-05');

        $specificMonth = new SpecificMonth($februaryDay);

        $this->assertEquals(new \DateTime('2014-02-01 00:00:00'), $specificMonth->getStart());
        $this->assertEquals(new \DateTime('2014-02-28 23:59:59'), $specificMonth->getEnd());
    }

}
