<?php
require_once(__DIR__."/example-bootstrap.php");

use \Arbor\Api\Gateway\RestGateway;
use \Arbor\Resource\ResourceType;
use Guzzle\Plugin\Log\LogPlugin;

$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);
//$api->getHttpClient()->addSubscriber(LogPlugin::getDebugPlugin());

$student = $api->retrieve(ResourceType::STUDENT, 137);
//$student->setPerson(new Person());
$student->setUniqueLearnerNumber(1000000000);

$student->connect($api);
$student->getPerson()->connect($api);

$student->getPerson()->save();
$student->save();


//Display Logic
$studentCopy2 = $api->retrieve(ResourceType::STUDENT, $student->getResourceId());

$hydrator = new \Arbor\Model\Hydrator();
$array = $hydrator->extractArray($studentCopy2);
print_r($array);