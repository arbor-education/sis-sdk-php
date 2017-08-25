<?php

require_once __DIR__ . '/example-bootstrap.php';

$ethnicity = $api->retrieve(\Arbor\Resource\ResourceType::ETHNICITY, 'AAFR');

$studentQuery = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::STUDENT);
$studentQuery->addPropertyFilter(\Arbor\Model\Student::ETHNICITY, \Arbor\Query\Query::OPERATOR_EQUALS, $ethnicity);
$studentQuery->addUserTagFilter('sims-id', 123);
$modelCollection = $api->query($studentQuery);

foreach ($modelCollection as $model) {
    $hydrator = new \Arbor\Model\Hydrator();
    print_r($hydrator->extractArray($model));
}
