<?php

namespace Arbor\Api\Exception;

use Arbor\Exception;

class ServerErrorException extends Exception
{
    protected mixed $requestPayload;
    protected mixed $responsePayload;
    protected ?string $_serverExceptionClass;
    protected ?string $_serverExceptionMessage;
    protected ?string $_serverExceptionTrace;

    public function __construct(
        $message = "",
        $code = 0,
        $previous = null,
        $requestPayload = null,
        $responsePayload = null,
        $serverExceptionClass = null,
        $serverExceptionMessage = null,
        $serverExceptionTrace = null
    ) {
        parent::__construct($message, $code, $previous);
        $this->requestPayload = $requestPayload;
        $this->responsePayload = $responsePayload;
        $this->setServerExceptionClass($serverExceptionClass);
        $this->setServerExceptionMessage($serverExceptionMessage);
        $this->setServerExceptionTrace($serverExceptionTrace);
    }

    /**
     * @return mixed|null
     */
    public function getRequestPayload(): mixed
    {
        return $this->requestPayload;
    }

    /**
     * @return mixed|null
     */
    public function getResponsePayload(): mixed
    {
        return $this->responsePayload;
    }

    public function setServerExceptionClass(?string $serverExceptionClass): void
    {
        $this->_serverExceptionClass = $serverExceptionClass;
    }

    public function getServerExceptionClass(): string
    {
        return $this->_serverExceptionClass;
    }

    public function setServerExceptionMessage(?string $serverExceptionMessage): void
    {
        $this->_serverExceptionMessage = $serverExceptionMessage;
    }

    public function getServerExceptionMessage(): string
    {
        return $this->_serverExceptionMessage;
    }

    public function setServerExceptionTrace(?string $serverExceptionTrace): void
    {
        $this->_serverExceptionTrace = $serverExceptionTrace;
    }

    public function getServerExceptionTrace(): string
    {
        return $this->_serverExceptionTrace;
    }
}
