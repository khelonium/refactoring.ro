<?php

 
namespace Refactoring\Specification;

use Refactoring\Util\HasErrorMessage;

abstract class AbstractSpecification implements SpecificationInterface
{
    use HasErrorMessage;
    
    public function combineAnd(SpecificationInterface $other)
    {
        return new AndSpecification($this, $other);
    }
    
    public function combineNot(SpecificationInterface $other)
    {
        return new NotSpecification($this, $other);
    }
    
    public function combineOr(SpecificationInterface $other)
    {
        return new OrSpecificaiton($this, $other);
    }
}