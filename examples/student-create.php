<?php

require_once __DIR__ . '/example-bootstrap.php';

$student = new \Arbor\Model\Student();
$student->setPerson(new \Arbor\Model\Person());
$student->getPerson()->setDateOfBirth(new DateTime('2000-01-01'));
$student->getPerson()->setLegalFirstName('Simbad');
$student->getPerson()->setLegalLastName('Sailor');
$student->getPerson()->setGender($api->retrieve(\Arbor\Resource\ResourceType::GENDER, 'MALE'));
$student->getPerson()->setTitle($api->retrieve(\Arbor\Resource\ResourceType::TITLE, 'MR'));
$student->setEthnicity($api->retrieve(\Arbor\Resource\ResourceType::ETHNICITY, 'AAFR'));
$student->setReligion($api->retrieve(\Arbor\Resource\ResourceType::RELIGION, 'CHRISTIAN'));
$student->tag('sims-id', 123);
$student->connect($api);
$student->getPerson()->connect($api);

$student->getPerson()->save();
$student->save();

$studentCopy2 = $api->retrieve(\Arbor\Resource\ResourceType::STUDENT, $student->getResourceId());

$hydrator = new \Arbor\Model\Hydrator();
print_r($hydrator->extractArray($studentCopy2));
