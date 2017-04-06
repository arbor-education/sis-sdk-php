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


$student = \Arbor\Model\Student::retrieve(710);

$query = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::QUALIFICATION_RESULT);
$query->addPropertyFilter(\Arbor\Model\QualificationResult::STUDENT, \Arbor\Query\Query::OPERATOR_EQUALS, $student);

$qualificationResults = \Arbor\Model\QualificationResult::query($query);

$results = array();
foreach($qualificationResults as $qualificationResult)
{
    $results[] = $qualificationResult->getQualificationGrade;
}
foreach($results as $result) {
    echo($result) . PHP_EOL;
}
