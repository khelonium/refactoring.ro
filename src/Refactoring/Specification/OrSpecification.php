<?php

namespace Refactoring\Specification;

use Refactoring\Specification\AbstractSpecification;

/**
 * @author Cosmin Dordea <cosmin.dordea@refactoring.ro>
 */
class OrSpecification extends AbstractSpecification
{
    /**
     * 
     * @var SpecificationInterface
     */
    private $one   = null;
    
    /**
     * 
     * @var SpecificationInterface
     */
    private $other = null;
    
    public function __construct(SpecificationInterface $x, SpecificationInterface $y)
    {
        $this->one   = $x;
        $this->other = $y;
    }
    
    public function isSatisfiedBy($object)
    {
        return $this->one->isSatisfiedBy($object) ||
               $this->other->isSatisfiedBy($object);
    }
}