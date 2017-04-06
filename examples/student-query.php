<?php
require_once(__DIR__."/example-bootstrap.php");

use \Arbor\Api\Gateway\RestGateway;
use \Arbor\Resource\ResourceType;
use \Arbor\Query\Query;
use Guzzle\Plugin\Log\LogPlugin;

$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);
//$api->getHttpClient()->addSubscriber(LogPlugin::getDebugPlugin());
$api->getHttpClient()->setSslVerification(false);

$ethnicity = $api->retrieve(ResourceType::ETHNICITY, "AAFR");

$studentQuery = new Query(ResourceType::STUDENT);
$studentQuery->addPropertyFilter("ethnicity", Query::OPERATOR_EQUALS, $ethnicity);
//$studentQuery->addUserTagFilter("sims-id", 123);
$modelCollection = $api->query($studentQuery);

//Display Logic
foreach($modelCollection AS $model)
{
    $hydrator = new \Arbor\Model\Hydrator();
    $array = $hydrator->extractArray($model);
    print_r($array);
}