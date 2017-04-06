<?php

namespace Arbor\Api;

class ServerValidationException extends \InvalidArgumentException
{
    public $validationErrors = array();

    /**
     * @param string $message
     * @param int $validationErrors
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct($message="", $validationErrors=array(), $code=0, \Exception $previous=null)
    {
        parent::__construct($message, $code, $previous);
        $this->validationErrors = $validationErrors;
    }

    /**
     * @return array
     */
    public function getValidationErrors()
    {
        return $this->validationErrors;
    }

    public function __toString()
    {
        $string = parent::__toString();
        $string .= "\n".print_r($this->getValidationErrors());
        return $string;
    }
}