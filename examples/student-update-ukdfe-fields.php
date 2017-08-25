<?php

require_once __DIR__ . '/example-bootstrap.php';

/** @var \Arbor\Model\Student $student */
$student = $api->retrieve(\Arbor\Resource\ResourceType::STUDENT, 137);
$student->setUniqueLearnerNumber(1000000000);
$student->connect($api);
$student->save();

$studentCopy2 = $api->retrieve(\Arbor\Resource\ResourceType::STUDENT, $student->getResourceId());
$hydrator = new \Arbor\Model\Hydrator();
print_r($hydrator->extractArray($studentCopy2));
