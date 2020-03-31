<?php
declare(strict_types=1);

namespace App\SDK;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;

class Client
{
    /**
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * @var RequestFactoryInterface
     */
    private $requestFactory;

    public function __construct(ClientInterface $httpClient, RequestFactoryInterface $requestFactory)
    {
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
    }

    public function someAPICall(): ResponseInterface
    {
        return $this->httpClient->sendRequest($this->requestFactory->createRequest('GET', 'https://www.google.com'));
    }
}
