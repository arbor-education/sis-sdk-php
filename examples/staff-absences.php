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

$staffAbsence = new \Arbor\Model\StaffAbsence();
$staffAbsence->setStaff($staff);
$staffAbsence->setStartDatetime($start);
$staffAbsence->setEndDatetime($end);
$staffAbsence->setStaffAbsenceCategory($api->retrieve(\Arbor\Resource\ResourceType::STAFF_ABSENCE_CATEGORY, 'SICKNESS'));
$staffAbsence->setSicknessCategory($api->retrieve(\Arbor\Resource\ResourceType::STAFF_ABSENCE_SICKNESS_CATEGORY, 'IOM_10'));
$staffAbsence->setSicknessSubcategory($api->retrieve(\Arbor\Resource\ResourceType::STAFF_ABSENCE_SICKNESS_SUBCATEGORY, 'IOM_10001'));
$staffAbsence->setApprovedDatetime(new \DateTime);
$staffAbsence->setApprovedByStaff($staff); //in real world this would be different staff member
$staffAbsence->setNarrative('narative');
$staffAbsence->setActualWorkingDays($daysLost);
$staffAbsence->setWorkingDays($daysLost);
$staffAbsence->setActualWorkingHours($daysLost * 8);
$staffAbsence->setWorkingHours($daysLost * 8);
$staffAbsence->connect($api);
$staffAbsence->save();

$staffAbsenceCopy = $api->retrieve(\Arbor\Resource\ResourceType::STAFF_ABSENCE, $staffAbsence->getResourceId());


$hydrator = new \Arbor\Model\Hydrator();
print_r($hydrator->extractArray($staffAbsenceCopy));
