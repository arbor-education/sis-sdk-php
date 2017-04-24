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
$api->getHttpClient()->setSslVerification(false);
$api->getHttpClient()->addSubscriber(LogPlugin::getDebugPlugin());

$ethnicity = $api->retrieve(ResourceType::ETHNICITY, "AAFR");

$staffQuery = new Query(ResourceType::STAFF);
$staffQuery->setTaggings(['STAFF__CURRENT_TEACHING_STAFF']);
$modelCollection = $api->query($staffQuery);

//Display Logic
foreach ($modelCollection as $model) {
    $hydrator = new \Arbor\Model\Hydrator();
    $array = $hydrator->extractArray($model);
    print_r($array);
}
