<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 18/10/14
 * Time: 13:40
 */

namespace Refactoring\Time\Interval;


class LastYearTest extends \PHPUnit_Framework_TestCase
{


    /**
     * @test
     */
    function itHasStartAndEndOfLastYear()
    {

        $today = new \DateTime();
        $today->sub(new \DateInterval('P1Y'));

        $first = new \DateTime($today->format('Y-01-01'));
        $last  = new \DateTime($today->format('Y-12-31 23:59:59'));

        $lastYear = new LastYear();

        $this->assertEquals($first, $lastYear->getStart());
        $this->assertEquals($last ,$lastYear->getEnd());
    }
}
