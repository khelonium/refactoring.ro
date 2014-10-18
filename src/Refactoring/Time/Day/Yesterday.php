<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 17/10/14
 * Time: 23:14
 */

namespace Refactoring\Time\Day;

use DateTime;

class Yesterday extends  DateTime
{

    public function __construct()
    {
        parent::__construct();
        $this->sub(new \DateInterval('P1D'));
    }
}