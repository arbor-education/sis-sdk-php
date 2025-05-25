<?php

declare(strict_types=1);

namespace Arbor\Api\Gateway\HttpClient;

use Http\Discovery\Psr17FactoryDiscovery;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;

class TypedRequestFactory
{
    public function __construct(
        private ?RequestFactoryInterface $requestFactory = null,
    ) {
        $this->requestFactory = $requestFactory ?: Psr17FactoryDiscovery::findRequestFactory();
    }

    public function createRequest(string $method, string $url): RequestInterface
    {
        return new TypedRequest($this->requestFactory->createRequest(mb_strtoupper($method), $url));
    }
}
