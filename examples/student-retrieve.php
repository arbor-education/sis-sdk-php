<?php

require_once __DIR__ . '/example-bootstrap.php';

$model = $api->retrieve(\Arbor\Resource\ResourceType::STUDENT, 1);
$hydrator = new \Arbor\Model\Hydrator();
print_r($hydrator->extractArray($model));
