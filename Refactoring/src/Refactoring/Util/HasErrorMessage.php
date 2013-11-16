<?php
/**
 * @author Cosmin Dordea <cosmin.dordea@refactoring.ro
 */
 
namespace Refactoring\Util;

trait HasErrorMessage
{
    private $errors = array();
    
  
    
    /**
     * @return array
    */
    public function getErrors()
    {
        return $this->errors;
    }
    
    public function hasErrors()
    {
        return count($this->errors) > 0;
    }
    
    /**
     *
     * @param strign $message
     */
    final public function addError($message)
    {
        $this->errors[] = $message;
    }
}