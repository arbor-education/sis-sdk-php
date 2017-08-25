<?php

require_once __DIR__ . '/example-bootstrap.php';

$query = new \Arbor\Query\Query(Arbor\Resource\ResourceType::PERSON);
$query->addPropertyFilter(\Arbor\Model\Person::LEGAL_FIRST_NAME, \Arbor\Query\Query::OPERATOR_EQUALS, '');
$query->addPropertyFilter(\Arbor\Model\Person::DATE_OF_BIRTH, \Arbor\Query\Query::OPERATOR_EQUALS, null);

$modelCollection = $api->query($query);

foreach ($modelCollection as $model) {
    $hydrator = new \Arbor\Model\Hydrator();
    print_r($hydrator->extractArray($model));
}
