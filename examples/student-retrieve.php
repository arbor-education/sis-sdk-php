<?php
require_once(__DIR__."/example-bootstrap.php");

use \Arbor\Api\Gateway\RestGateway;
use \Arbor\Resource\ResourceType;

$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);

$model = $api->retrieve(ResourceType::STUDENT, 1);

//Display Logic
$hydrator = new \Arbor\Model\Hydrator();
$array = $hydrator->extractArray($model);
print_r($array);
