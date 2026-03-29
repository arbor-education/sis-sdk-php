<?php

namespace Arbor\Api\Gateway\HttpClient;

use Arbor\Api\Exception\ServerErrorException;
use Arbor\Api\Gateway\UploadFile;

interface HttpClientInterface
{
    public const HTTP_METHOD_GET = "GET";
    public const HTTP_METHOD_POST = "POST";
    public const HTTP_METHOD_PUT = "PUT";
    public const HTTP_METHOD_DELETE = "DELETE";

    public function getApplicationId(): string;

    public function setApplicationId(string $applicationId): void;

    public function getUserAgent(): string;

    public function setUserAgent(string $userAgent): static;

    public function getAuthPassword(): string;

    public function setAuthPassword(string $authPassword): static;

    public function getAuthUser(): string;

    public function setAuthUser(string $authUser): static;

    public function getBaseUrl(): string;

    public function setBaseUrl(string $baseUrl): static;

    /**
     * @param string $method
     * @param string $url
     * @param array $options
     * @return array
     * @throws ServerErrorException
     */
    public function sendRequest(string $method, string $url, array $options = []): array;

    /**
     * @param string $url
     * @param UploadFile $file
     * @param array $options Optional options (e.g. 'query', 'headers')
     * @return array
     * @throws ServerErrorException
     */
    public function uploadRequest(string $url, UploadFile $file, array $options = []): array;
}