<?php

require_once __DIR__ . '/example-bootstrap.php';

$ethnicity = $api->retrieve(\Arbor\Resource\ResourceType::ETHNICITY, 'AAFR');
$query = new \Arbor\Query\Query();
$query->addPropertyFilter(\Arbor\Model\Student::ETHNICITY, \Arbor\Query\Query::OPERATOR_EQUALS, $ethnicity);

$modelCollection = \Arbor\Model\Student::query($query);
$hydrator = new \Arbor\Model\Hydrator();

foreach ($modelCollection as $model) {
    print_r($hydrator->extractArray($model));
}
