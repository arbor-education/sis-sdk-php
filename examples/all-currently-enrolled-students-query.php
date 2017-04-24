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

$date = new \DateTime();

$query = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::SCHOOL_ENROLMENT);
$query->addPropertyFilter(\Arbor\Model\SchoolEnrolment::START_DATE, \Arbor\Query\Query::OPERATOR_BEFORE, $date);
$query->addPropertyFilter(\Arbor\Model\SchoolEnrolment::END_DATE, \Arbor\Query\Query::OPERATOR_AFTER, $date);

$enrolments = \Arbor\Model\SchoolEnrolment::query($query);

$students = [];
foreach ($enrolments as $enrolment) {
    echo($enrolment->getStudent()->getPerson()->getLegalFirstName() . ' ' .
        $enrolment->getStudent()->getPerson()->getLegalLastName() . PHP_EOL);
}
