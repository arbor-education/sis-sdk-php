<?php
require_once(__DIR__."/example-bootstrap.php");

use \Arbor\Api\Gateway\RestGateway;
use \Arbor\Resource\ResourceType;
use \Arbor\Model\Person;
use \Arbor\Model\Student;
use Guzzle\Plugin\Log\LogPlugin;

$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);
//$api->getHttpClient()->addSubscriber(LogPlugin::getDebugPlugin());

$student = new Student();
$student->setPerson(new Person());
$student->getPerson()->setDateOfBirth(new DateTime("2000-01-01"));
$student->getPerson()->setLegalFirstName("Simbad");
$student->getPerson()->setLegalLastName("Sailor");
$student->getPerson()->setGender($api->retrieve(ResourceType::GENDER, "MALE"));
$student->getPerson()->setTitle($api->retrieve(ResourceType::TITLE, "MR"));
$student->setEthnicity($api->retrieve(ResourceType::ETHNICITY, "AAFR"));
$student->setReligion($api->retrieve(ResourceType::RELIGION, "CHRISTIAN"));
$student->setUniqueLearnerNumber(1000000000);
$student->tag("sims-id", 123);

$student->connect($api);
$student->getPerson()->connect($api);

$student->getPerson()->save();
$student->save();

//Display Logic
$studentCopy2 = $api->retrieve(ResourceType::STUDENT, $student->getResourceId());

$hydrator = new \Arbor\Model\Hydrator();
$array = $hydrator->extractArray($studentCopy2);
print_r($array);