<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$requestFactory = new \Nyholm\Psr7\Factory\Psr17Factory();

// example with symfony/http
$symfonyHttpClient = new \Symfony\Component\HttpClient\Psr18Client();
$apiClientWithSymfonyHttp = new \App\SDK\Client($symfonyHttpClient, $requestFactory);
$response = $apiClientWithSymfonyHttp->someAPICall();
dump($response->getStatusCode());

// example with guzzlehttp/guzzle
$guzzleHttpClient = new \RicardoFiorani\GuzzlePsr18Adapter\Client();
$apiClientWithGuzzle = new \App\SDK\Client($guzzleHttpClient, $requestFactory);
$response = $apiClientWithGuzzle->someAPICall();
dump($response->getStatusCode());

// example with curl via php-http/httplug
$curlClient = new \Http\Client\Curl\Client();
$apiClientWithCurl = new \App\SDK\Client($curlClient, $requestFactory);
$response = $apiClientWithCurl->someAPICall();
dump($response->getStatusCode());
