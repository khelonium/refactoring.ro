<?php

 
namespace Refactoring\Specification;

use Refactoring\Util\HasErrorMessage;

abstract class AbstractSpecification implements CompositeSpecificationInterface
{
    use HasErrorMessage;

    /**
     * Returns a new specificatin object with both specs combined in a and rule
     * @param SpecificationInterface $other
     * @return \Refactoring\Specification\AndSpecification
     */
    public function combineAnd(SpecificationInterface $other)
    {
        return new AndSpecification($this, $other);
    }

    /**
     *  Returns a new specificatin object with both specs combined in a or rule
     * @param SpecificationInterface $other
     * @return \Refactoring\Specification\NotSpecification
     */
    public function combineNot(SpecificationInterface $other)
    {
        return new NotSpecification($this, $other);
    }

    /**
     *  Returns a new specificatin object with both specs combined in a not rule
     * @param SpecificationInterface $other
     * @return \Refactoring\Specification\OrSpecificaiton
     */
    public function combineOr(SpecificationInterface $other)
    {
        return new OrSpecificaiton($this, $other);
    }
}