<?php
/**
 * Created by JetBrains PhpStorm.
 * User: logo
 * Date: 11/23/13
 * Time: 11:19 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Refactoring\Db;

use Zend\Db\Sql\Select;

abstract class AbstractSpecification implements \Refactoring\Db\SqlSpecification
{


    private $equalTo         = array();
    private $greaterOrEqual  = array();
    private $lessOrEqual     = array();


    /**
     * @param Select $select
     * @param callable $mapper The mapper knows how to convert from model key to db key
     * @return Select
     */
    public function specify(Select $select, $mapper )
    {

        foreach ($this->equalTo as $key => $val) {
            $db_key = $mapper($key);
            $select->where->equalTo($db_key, $val);
        }

        foreach ($this->greaterOrEqual as $key => $val) {
            $db_key = $mapper($key);
            $select->where->greaterThanOrEqualTo($db_key, $val);
        }

        foreach ($this->lessOrEqual as $key => $val) {
            $db_key = $mapper($key);
            $select->where->lessThanOrEqualTo($db_key, $val);
        }

        return $select;

    }


    final protected function equalTo($key, $val)
    {
        $this->equalTo[$key] = $val;
    }

    final protected function greaterOrEqual($key, $val)
    {
        $this->greaterOrEqual[$key] = $val;
    }

    final protected function lessOrEqual($key, $val)
    {
        $this->lessOrEqual[$key] = $val;
    }

}