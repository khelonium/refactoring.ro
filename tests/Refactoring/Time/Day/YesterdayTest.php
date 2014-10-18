<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 17/10/14
 * Time: 23:16
 */

namespace Refactoring\Time\Day;


class YesterdayTest extends \PHPUnit_Framework_TestCase
{
    private $yesterday;


    /**
     * @before
     */
    function itIsADateTime()
    {
        $this->yesterday = new Yesterday();
        $this->assertTrue($this->yesterday instanceof \DateTime);
    }

    /**
     * @test
     */
    function itIsInitializedWithYesterday()
    {
        $yesterday =  new \DateTime();
        $yesterday->sub(new \DateInterval('P1D'));

        $this->assertEquals($yesterday->format('Y-m-d'), $this->yesterday->format('Y-m-d'));

    }
}
