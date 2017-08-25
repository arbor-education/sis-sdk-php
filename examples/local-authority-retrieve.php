<?php

require_once __DIR__ . '/example-bootstrap.php';

$model = $api->retrieve(\Arbor\Resource\ResourceType::LOCAL_AUTHORITY, '001');

$hydrator = new \Arbor\Model\Hydrator();
print_r($hydrator->extractArray($model));
