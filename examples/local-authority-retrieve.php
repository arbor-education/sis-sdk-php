<?php
require_once(__DIR__ . "/example-bootstrap.php");

use \Arbor\Api\Gateway\RestGateway;
use \Arbor\Resource\ResourceType;
use Guzzle\Plugin\Log\LogPlugin;

$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);
$api->getHttpClient()->addSubscriber(LogPlugin::getDebugPlugin());
$model = $api->retrieve(ResourceType::LOCAL_AUTHORITY, '001');

//Display Logic
$hydrator = new \Arbor\Model\Hydrator();
$array = $hydrator->extractArray($model);
print_r($array);
