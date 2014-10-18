<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 18/10/14
 * Time: 20:09
 */

namespace Refactoring\Time\Interval;


class ThisYearTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function itHasStartAndEndOfThisYear()
    {

        $today = new \DateTime();

        $first = new \DateTime($today->format('Y-01-01'));
        $last  = new \DateTime($today->format('Y-12-31 23:59:59'));

        $thisYear = new ThisYear();

        $this->assertEquals($first, $thisYear->getStart());
        $this->assertEquals($last ,$thisYear->getEnd());
    }
}
