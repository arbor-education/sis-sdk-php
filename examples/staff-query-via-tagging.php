<?php

require_once __DIR__ . '/example-bootstrap.php';

$ethnicity = $api->retrieve(\Arbor\Resource\ResourceType::ETHNICITY, 'AAFR');

$staffQuery = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::STAFF);
$staffQuery->setTaggings(['STAFF__CURRENT_TEACHING_STAFF']);
$modelCollection = $api->query($staffQuery);

foreach ($modelCollection as $model) {
    $hydrator = new \Arbor\Model\Hydrator();
    $array = $hydrator->extractArray($model);
    print_r($hydrator->extractArray($model));
}
