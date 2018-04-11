<?php

require_once __DIR__ . '/example-bootstrap.php';

$staff = new \Arbor\Model\Staff();
$staff->setPerson(new \Arbor\Model\Person());
$staff->getPerson()->setDateOfBirth(new DateTime('2000-01-01'));
$staff->getPerson()->setLegalFirstName('Simbad');
$staff->getPerson()->setLegalLastName('Sailor');
$staff->getPerson()->setGender($api->retrieve(\Arbor\Resource\ResourceType::GENDER, 'MALE'));
$staff->getPerson()->setTitle($api->retrieve(\Arbor\Resource\ResourceType::TITLE, 'MR'));
$staff->setEthnicity($api->retrieve(\Arbor\Resource\ResourceType::ETHNICITY, 'AAFR'));
$staff->setReligion($api->retrieve(\Arbor\Resource\ResourceType::RELIGION, 'CHRISTIAN'));
$staff->tag('example-reference-id', 123);
$staff->connect($api);
$staff->getPerson()->connect($api);

$staff->getPerson()->save();
$staff->save();

$staffCopy = $api->retrieve(\Arbor\Resource\ResourceType::STAFF, $staff->getResourceId());

// Update operation
$staffCopy->getPerson()->setLegalFirstName('John');
$staffCopy->getPerson()->setLegalLastName('Doe');
$staffCopy->connect($api);
$staffCopy->getPerson()->connect($api);
$staffCopy->getPerson()->save();
$staffCopy->save();

$hydrator = new \Arbor\Model\Hydrator();
print_r($hydrator->extractArray($staffCopy));
print_r($staffCopy->getUserTags());
