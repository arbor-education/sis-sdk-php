<?php
require_once(__DIR__."/example-bootstrap.php");

use \Arbor\Api\Gateway\RestGateway;
use \Arbor\Resource\ResourceType;

$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);

$changes = $api->getChanges(ResourceType::STUDENT, 43322);

//Display Logic
foreach ($changes as $change) {
    echo " Object: ". $change->getChangedResource()->getResourceType()
         . ", ID:" . $change->getChangedResource()->getResourceId()
         ." has been ".$change->getChangeType() ."ed\n";
}
