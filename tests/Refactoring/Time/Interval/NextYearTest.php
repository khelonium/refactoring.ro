<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 18/10/14
 * Time: 19:53
 */

namespace Refactoring\Time\Interval;


class NextYearTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    function itHasStartAndEndOfNextYear()
    {

        $today = new \DateTime();
        $today->add(new \DateInterval('P1Y'));

        $first = new \DateTime($today->format('Y-01-01 00:00:00'));
        $last  = new \DateTime($today->format('Y-12-31 23:59:59'));

        $nextYear = new NextYear();

        $this->assertEquals($first, $nextYear->getStart());
        $this->assertEquals($last ,$nextYear->getEnd());
    }
}
