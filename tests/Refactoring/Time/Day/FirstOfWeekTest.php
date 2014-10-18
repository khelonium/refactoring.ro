<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 17/10/14
 * Time: 23:16
 */

namespace Refactoring\Time\Day;


class FirstOfWeekTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FirstOfWeek
     */
    private $firstOfWeek;


    /**
     * @before
     */
    function itIsADateTime()
    {
        $this->firstOfWeek = new FirstOfWeek();
        $this->assertTrue($this->firstOfWeek instanceof \DateTime);
    }

    /**
     * @test
     */
    function itIsInitializedWithFirstOfWeek()
    {
        $tomorrow =  new \DateTime('Last Monday');

        $this->assertEquals($tomorrow, $this->firstOfWeek);

    }
}
