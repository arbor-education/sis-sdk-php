<?php

require_once __DIR__ . '/example-bootstrap.php';

$modelCollection = $api->query(new \Arbor\Query\Query(\Arbor\Resource\ResourceType::STUDENT));

foreach ($modelCollection as $model) {
    $hydrator = new \Arbor\Model\Hydrator();
    print_r($hydrator->extractArray($model));
}
