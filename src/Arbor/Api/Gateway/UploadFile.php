<?php

declare(strict_types=1);

namespace Arbor\Api\Gateway;

use Psr\Http\Message\StreamInterface;

class UploadFile
{
    public function __construct(
        public readonly string $name,
        public readonly string|StreamInterface $contents,
        public readonly ?string $filename = null,
        public readonly ?array $headers = null,
    ) {
    }
}
