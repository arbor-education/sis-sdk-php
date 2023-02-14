<?php

namespace Arbor\Api;

use Arbor\Exception;

class ServerErrorException extends Exception
{
    protected $requestPayload;
    protected $responsePayload;
    /**@var string $_serverExceptionClass */
    protected $_serverExceptionClass;
    /**@var string $_serverExceptionMessage */
    protected $_serverExceptionMessage;
    /**@var string $_serverExceptionTrace */
    protected $_serverExceptionTrace;

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
    public function getRequestPayload()
    {
        return $this->requestPayload;
    }

    /**
     * @return mixed|null
     */
    public function getResponsePayload()
    {
        return $this->responsePayload;
    }

    /**
     * @param string $serverExceptionClass
     */
    public function setServerExceptionClass($serverExceptionClass)
    {
        $this->_serverExceptionClass = $serverExceptionClass;
    }

    /**
     * @return string
     */
    public function getServerExceptionClass()
    {
        return $this->_serverExceptionClass;
    }

    /**
     * @param string $serverExceptionMessage
     */
    public function setServerExceptionMessage($serverExceptionMessage)
    {
        $this->_serverExceptionMessage = $serverExceptionMessage;
    }

    /**
     * @return string
     */
    public function getServerExceptionMessage()
    {
        return $this->_serverExceptionMessage;
    }

    /**
     * @param string $serverExceptionTrace
     */
    public function setServerExceptionTrace($serverExceptionTrace)
    {
        $this->_serverExceptionTrace = $serverExceptionTrace;
    }

    /**
     * @return string
     */
    public function getServerExceptionTrace()
    {
        return $this->_serverExceptionTrace;
    }
}
