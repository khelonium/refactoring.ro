<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 15/10/14
 * Time: 23:18
 */

use Refactoring\Time\Interval\LastMonth;
use Refactoring\Time\Interval\NextMonth;
use Refactoring\Time\Interval\ThisMonth;
use Refactoring\Time\Interval\ThisYear;

require_once __DIR__.'/../vendor/autoload.php';

$lastMonth = new LastMonth();


echo "First of last month was ",$lastMonth->getStart()->format("Y-m-d"),"\n";

$today = new \DateTime();

if (!($lastMonth->contains($today))) {
    echo "Today is not contained in last month \n";
}

$thisMonth = new ThisMonth();

if ($thisMonth->contains($today)) {
    echo "This month contains today\n";
}
$thisYear = new ThisYear();

if ($thisYear->overlaps($lastMonth)) {
    echo "This year overlaps with last month \n";
}

$nextMonth = new NextMonth();

if (!($nextMonth->overlaps($lastMonth))) {
    echo "Next month does not overlap with this month \n";
}


