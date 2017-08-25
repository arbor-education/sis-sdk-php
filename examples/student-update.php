<?php

require_once __DIR__ . '/example-bootstrap.php';

/** @var \Arbor\Model\Student $student */
$student = $api->retrieve(\Arbor\Resource\ResourceType::STUDENT, 137);

$student->getPerson()->setDateOfBirth(new DateTime('2000-01-01'));
$student->getPerson()->setLegalFirstName('Simbad');
$student->getPerson()->setLegalLastName('Sailor');
$student->getPerson()->setGender($api->retrieve(\Arbor\Resource\ResourceType::GENDER, 'FEMALE'));
$student->getPerson()->setTitle($api->retrieve(\Arbor\Resource\ResourceType::TITLE, 'MR'));
$student->setUniqueLearnerNumber(1000000000);
$student->setEthnicity($api->retrieve(\Arbor\Resource\ResourceType::ETHNICITY, 'WBRI'));
$student->setReligion($api->retrieve(\Arbor\Resource\ResourceType::RELIGION, 'CHRISTIAN'));
$student->setEthnicitySource('P');

$student->connect($api);
$student->getPerson()->connect($api);

$student->getPerson()->save();
$student->save();

$studentCopy2 = $api->retrieve(\Arbor\Resource\ResourceType::STUDENT, $student->getResourceId());
$hydrator = new \Arbor\Model\Hydrator();
$array = $hydrator->extractArray($studentCopy2);
print_r($array);
