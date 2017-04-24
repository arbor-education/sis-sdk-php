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
$api->getHttpClient()->addSubscriber(LogPlugin::getDebugPlugin());
$api->getHttpClient()->setSslVerification(false);

$query = new Query(\Arbor\Resource\ResourceType::PERSON);
$query->addPropertyFilter(\Arbor\Model\Person::LEGAL_FIRST_NAME, Query::OPERATOR_EQUALS, "");
$query->addPropertyFilter(\Arbor\Model\Person::DATE_OF_BIRTH, Query::OPERATOR_EQUALS, null);

$modelCollection = $api->query($query);

//Display Logic
foreach ($modelCollection as $model) {
    $hydrator = new \Arbor\Model\Hydrator();
    $array = $hydrator->extractArray($model);
    print_r($array);
}
