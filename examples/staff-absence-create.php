<?php

require_once __DIR__ . '/example-bootstrap.php';

$staffApproved = $api->retrieve(\Arbor\Resource\ResourceType::STAFF, 16);

$date = new DateTime();

$staff = new \Arbor\Model\StaffAbsence();
$staff->setStaff($staffApproved);
$staff->setStartDatetime($date);
$staff->setEndDatetime(new DateTime('+1 day'));
$staff->setStaffAbsenceCategory($api->retrieve(\Arbor\Resource\ResourceType::STAFF_ABSENCE_CATEGORY, 'SICKNESS'));
$staff->setApprovedDatetime(new DateTime('NOW'));
$staff->setApprovedByStaff($staffApproved);
$staff->setNarrative('Sickness - working remotely');

$staff->connect($api);
$staff->save();

$staffCopy = $api->retrieve(\Arbor\Resource\ResourceType::STAFF_ABSENCE, $staff->getResourceId());

$hydrator = new \Arbor\Model\Hydrator();
print_r($hydrator->extractArray($staffCopy));