<?php

namespace Refactoring\Specification;

use Refactoring\Specification\AbstractSpecification;

/**
 * @author Cosmin Dordea <cosmin.dordea@refactoring.ro>
 */
class NotSpecification extends AbstractSpecification
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
    
    public function __construct(SpecificationInterface $x)
    {
        $this->one   = $x;
    }
    
    public function isSatisfiedBy($object)
    {
        return !$this->one->isSatisfiedBy($object);
    }
}