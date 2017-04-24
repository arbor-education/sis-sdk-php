<?php
require_once(__DIR__."/example-bootstrap.php");

use \Arbor\Api\Gateway\RestGateway;
use \Arbor\Resource\ResourceType;
use \Arbor\Query\Query;

$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);

$modelCollection = $api->query(new Query(ResourceType::STUDENT));

//Display Logic
foreach ($modelCollection as $model) {
    $hydrator = new \Arbor\Model\Hydrator();
    $array = $hydrator->extractArray($model);
    print_r($array);
}
