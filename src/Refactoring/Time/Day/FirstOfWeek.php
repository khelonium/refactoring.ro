<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 17/10/14
 * Time: 23:14
 */

namespace Refactoring\Time\Day;

use DateTime;

class FirstOfWeek extends  DateTime
{

    public function __construct()
    {
        parent::__construct('Last Monday');
    }
}