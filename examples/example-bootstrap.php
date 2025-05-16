<?php

require_once __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/config.php';

$httpClient = new \Arbor\Api\Gateway\HttpClient(
    null,
    null,
    null,
    $config['api']['baseUrl'],
    $config['api']['auth']['user'],
    $config['api']['auth']['password']
);

$api = new \Arbor\Api\Gateway\PsrRestGateway(
    $httpClient,
    new \Arbor\Model\Hydrator(),
    new \Arbor\Filter\CamelCaseToDash(),
    new \Arbor\Filter\PluralizeFilter(),
);

//
//$api = new \Arbor\Api\Gateway\RestGateway(
//    $config['api']['baseUrl'],
//    $config['api']['auth']['user'],
//    $config['api']['auth']['password']
//);

\Arbor\Model\ModelBase::setDefaultGateway($api);

date_default_timezone_set('Europe/London');

return $api;
