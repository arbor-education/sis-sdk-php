<?php

require_once("../vendor/autoload.php");
require_once("../src/register_autoloader.php");
require_once(__DIR__ . "/example-bootstrap.php");

date_default_timezone_set("Europe/London");

use Arbor\Api\Gateway\RestGateway;
use Arbor\Model\ModelBase;

$api = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);

$api->getHttpClient()->setSslVerification(false);
ModelBase::setDefaultGateway($api);

$users= \Arbor\Model\User::query();

$today = new \DateTime("-1 year"); // Academic year 2013-2014
$course = \Arbor\Model\AcademicUnit::retrieve(389); // MATHS__YEAR_7

$query = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::ACADEMIC_UNIT_ENROLMENT);
$query->addPropertyFilter(\Arbor\Model\AcademicUnitEnrolment::START_DATE, \Arbor\Query\Query::OPERATOR_BEFORE, $today);
$query->addPropertyFilter(\Arbor\Model\AcademicUnitEnrolment::END_DATE, \Arbor\Query\Query::OPERATOR_AFTER, $today);
$query->addPropertyFilter(\Arbor\Model\AcademicUnitEnrolment::ACADEMIC_UNIT, \Arbor\Query\Query::OPERATOR_EQUALS, $course);

$currentAcademicUnitEnrolments = \Arbor\Model\AcademicUnitEnrolment::query($query);

foreach ($currentAcademicUnitEnrolments as $currentAcademicUnitEnrolment) {
    echo($currentAcademicUnitEnrolment->getAcademicUnit()->getAcademicUnitName() . " => " .
        $currentAcademicUnitEnrolment->getStudent()->getPerson()->getLegalFirstName() . PHP_EOL);
}
