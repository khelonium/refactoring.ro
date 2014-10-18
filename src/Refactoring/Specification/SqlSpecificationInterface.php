<?php
namespace Refactoring\Specification;


interface SqlSpecification
{
    /**
     * @param $object
     * @return mixed
     */
    public function specify($object);
}