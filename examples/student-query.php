<?php

require_once __DIR__ . '/example-bootstrap.php';

$hydrator = new \Arbor\Model\Hydrator();
$personQuery = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::PERSON);
$personQuery->addPropertyFilter(\Arbor\Model\Person::LEGAL_LAST_NAME, \Arbor\Query\Query::OPERATOR_EQUALS, 'Adams');

$personsCollection = $api->query($personQuery);

foreach ($personsCollection as $person) {
    $studentQuery = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::STUDENT);
    $studentQuery->addPropertyFilter(\Arbor\Model\Student::PERSON, \Arbor\Query\Query::OPERATOR_EQUALS, $person);
    $studentCollection = $api->query($studentQuery);

    foreach ($studentCollection as $student) {
        print_r($hydrator->extractArray($student));
    }
}
