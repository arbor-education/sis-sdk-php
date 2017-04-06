<?php

require_once("../vendor/autoload.php");
require_once("../src/register_autoloader.php");
require_once(__DIR__."/example-bootstrap.php");

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

$query = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::STUDENT_PROGRESS_ASSESSMENT_MARK);
$query->addPropertyFilter(\Arbor\Model\StudentProgressAssessmentMark::STUDENT, \Arbor\Query\Query::OPERATOR_EQUALS, $student);

$progressMarks = \Arbor\Model\StudentProgressAssessmentMark::query($query);

$marks = array();
foreach($progressMarks as $progressMark)
{
    $marks[] = $progressMark->getStudent()->getPerson()->getLegalFirstName() . ' ' .
        $progressMark->getStudent()->getPerson()->getLegalLastName() . ' ' .
        $progressMark->getAssessment()->getAssessmentName() . ' ' .
        $progressMark->getAssessment()->getSubject()->getSubjectName() . ' ' .
        $progressMark->getGrade()->getGradeCode() . ' ' .
        $progressMark->getAssessmentDate();
}
foreach($marks as $mark) {
    echo($mark) . PHP_EOL;
}