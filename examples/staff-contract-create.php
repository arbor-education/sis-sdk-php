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


/** create contract **/
$staffEmloymentType = $api->retrieve(\Arbor\Resource\ResourceType::STAFF_EMPLOYMENT_TYPE, 'PERMANENT');
$staffContract = new \Arbor\Model\StaffContract();
$staffContract->setStaff($staff);
$staffContract->setContractName('Meal Supervisor');
$staffContract->setContractReference('Support Staff');
$staffContract->setStaffEmploymentType($staffEmloymentType);
$staffContract->setIssuedDate(new \DateTime);
$staffContract->setStartDate(new \DateTime);
$staffContract->setEndDate(new \DateTime);
$staffContract->setExpectedEndDate(null);
$staffContract->setPayrollNumber(123);
$staffContract->connect($api);
$staffContract->save();

$staffContractCopy = $api->retrieve(\Arbor\Resource\ResourceType::STAFF_CONTRACT, $staffContract->getResourceId());


$hydrator = new \Arbor\Model\Hydrator();
print_r($hydrator->extractArray($staffContractCopy));
