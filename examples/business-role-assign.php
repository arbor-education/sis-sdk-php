<?php

require_once __DIR__ . '/example-bootstrap.php';

$businessRoles = $api->query(new \Arbor\Query\Query(\Arbor\Resource\ResourceType::BUSINESS_ROLE));
foreach ($businessRoles as $businessRole) {
    //iterate to find the right one
    break;
}

$positions = $api->query(new \Arbor\Query\Query(\Arbor\Resource\ResourceType::POSITION));
foreach ($positions as $position) {
    //iterate to find the right one
    break;
}

//Connect position to role
$positionBusinessRole = new \Arbor\Model\PositionBusinessRole();
$positionBusinessRole->setPosition($position);
$positionBusinessRole->setBusinessRole($businessRole);
$positionBusinessRole->connect($api);
$positionBusinessRole->save();

$br = $api->retrieve(\Arbor\Resource\ResourceType::POSITION_BUSINESS_ROLE, $positionBusinessRole->getResourceId());
$hydrator = new \Arbor\Model\Hydrator();
print_r($hydrator->extractArray($br));
