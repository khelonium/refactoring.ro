<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 17/10/14
 * Time: 23:16
 */

namespace Refactoring\Time\Day;


class TomorrowTest extends \PHPUnit_Framework_TestCase
{
    private $tomorrow;


    /**
     * @before
     */
    function itIsADateTime()
    {
        $this->tomorrow = new Tomorrow();
        $this->assertTrue($this->tomorrow instanceof \DateTime);
    }

    /**
     * @test
     */
    function itIsInitializedWithTomorrow()
    {
        $tomorrow =  new \DateTime();
        $tomorrow->add(new \DateInterval('P1D'));

        $this->assertEquals($tomorrow->format('Y-m-d'), $this->tomorrow->format('Y-m-d'));

    }
}
