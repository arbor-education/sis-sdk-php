<?php

namespace Arbor\Api\Exception;

use Exception;

class ServerValidationException extends \InvalidArgumentException
{
    public int|array $validationErrors = [];

    /**
     * @param string $message
     * @param array $validationErrors
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct(string $message = "", $validationErrors = [], $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->validationErrors = $validationErrors;
    }

    /**
     * @return array|int
     */
    public function getValidationErrors(): array|int
    {
        return $this->validationErrors;
    }

    public function __toString(): string
    {
        $string = parent::__toString();
        $string .= "\n" . print_r($this->getValidationErrors(), true);
        return $string;
    }
}
