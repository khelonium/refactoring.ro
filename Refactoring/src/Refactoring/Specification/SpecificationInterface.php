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
    
    /**
     * Returns a new specificatin object with both specs combined in a and rule
     * @param SpecificationInterface $other
     */
    public function combineAnd(SpecificationInterface $other);
    
    
    /**
     *  Returns a new specificatin object with both specs combined in a or rule
     * @param SpecificationInterface $other
     */
    public function combineOr(SpecificationInterface $other);
    
    
    /**
     *  Returns a new specificatin object with both specs combined in a not rule
     * @param SpecificationInterface $other
     */
    public function combineNot(SpecificationInterface $other);
    
}