<?php
/**
 * 
 * @author Cosmin Dordea <cosmin.dordea@refactoring.ro>
 */

namespace Refactoring\Repository;
use Zend\Db\TableGateway\TableGateway;

/**
 * Class GenericRepository
 * Used to work with any kind of entities, without having to extend your repository
 * Supports by default add, update, delete and search by specification
 * @package Refactoring\Repository
 */
class GenericRepository extends AbstractRepository
{

    /**
     * @var null|\Zend\Db\TableGateway\TableGateway
     */
    private $gateway = null;

    public function __construct(TableGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function forKey($key, $value)
    {
        $mapper = $this->gateway()->getResultSetPrototype()->getArrayObjectPrototype()->getDatabaseMapper();
        $select = $this->gateway()->getSql()->select();
        $select->where->equalTo($mapper($key), $value);

        $result = $this->gateway()->selectWith($select);
        $out = array();

        foreach ($result as $entry) {
            $out[] = $entry;
        }

        return $out;
    }

    /**
     * Returns the table gateway used by the main entity
     * @return TableGateway
     */
    protected function gateway()
    {
        return $this->gateway;
    }

}
