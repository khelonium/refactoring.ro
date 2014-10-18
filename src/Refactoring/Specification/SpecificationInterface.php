<?php

namespace Refactoring\Specification;
/**
 * 
 * @author Cosmin Dordea
 *
 */
interface SpecificationInterface
{
    /**
     * 
     * @param unknown_type $object
     * @return bool
     */
    public function isSatisfiedBy($object);

    
}