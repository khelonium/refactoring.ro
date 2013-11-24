<?php
namespace Refactoring\Db;

use Zend\Db\Sql\Select;

interface SqlSpecification
{
    /**
     * @param Select $select
     * @return mixed
     */
    public function specify(Select $select, $mapper);
}