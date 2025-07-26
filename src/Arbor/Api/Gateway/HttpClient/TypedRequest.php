<?php

declare(strict_types=1);

namespace Arbor\Api\Gateway\HttpClient;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Because PSR 7, 17, 18 were published before covariant support was added into PHP (7.4), MessageInterface
 * doesn't have static as a return type and that creates a set of problems for unit testing and static analyses.
 * That is why we have this wrapper class called TypedRequest that makes this work.
 **/
class TypedRequest implements RequestInterface
{
    private RequestInterface $inner;

    public function __construct(RequestInterface $inner)
    {
        $this->inner = $inner;
    }

    public function getInner(): RequestInterface
    {
        return $this->inner;
    }

    public function withHeader($name, $value): self
    {
        return new self($this->inner->withHeader($name, $value));
    }

    public function withAddedHeader($name, $value): self
    {
        return new self($this->inner->withAddedHeader($name, $value));
    }

    public function withBody(StreamInterface $body): self
    {
        return new self($this->inner->withBody($body));
    }

    public function withMethod($method): self
    {
        return new self($this->inner->withMethod($method));
    }

    public function withUri(UriInterface $uri, $preserveHost = false): self
    {
        return new self($this->inner->withUri($uri, $preserveHost));
    }

    // Delegate all read methods

    public function getMethod(): string
    {
        return $this->inner->getMethod();
    }

    public function getUri(): UriInterface
    {
        return $this->inner->getUri();
    }

    public function getHeaders(): array
    {
        return $this->inner->getHeaders();
    }

    public function hasHeader($name): bool
    {
        return $this->inner->hasHeader($name);
    }

    public function getHeader($name): array
    {
        return $this->inner->getHeader($name);
    }

    public function getHeaderLine($name): string
    {
        return $this->inner->getHeaderLine($name);
    }

    public function getBody(): StreamInterface
    {
        return $this->inner->getBody();
    }

    public function getProtocolVersion(): string
    {
        return $this->inner->getProtocolVersion();
    }

    public function withProtocolVersion($version): self
    {
        return new self($this->inner->withProtocolVersion($version));
    }

    public function withoutHeader($name): self
    {
        return new self($this->inner->withoutHeader($name));
    }

    public function getRequestTarget(): string
    {
        return $this->inner->getRequestTarget();
    }

    public function withRequestTarget($requestTarget): self
    {
        return new self($this->inner->withRequestTarget($requestTarget));
    }
}
