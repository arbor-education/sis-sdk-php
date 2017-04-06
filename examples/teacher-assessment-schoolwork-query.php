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

$users= \Arbor\Model\User::query();

$student = \Arbor\Model\Student::retrieve(710);

$schoolworkQuery = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::STUDENT_SCHOOLWORK);
$schoolworkQuery->addPropertyFilter(\Arbor\Model\StudentSchoolwork::STUDENT, \Arbor\Query\Query::OPERATOR_EQUALS, $student);

$schoolworks = \Arbor\Model\StudentSchoolwork::query($schoolworkQuery);

foreach($schoolworks as $schoolwork) {
    $schoolworkMarkQuery = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::STUDENT_SCHOOLWORK_MARK);
    $schoolworkMarkQuery->addPropertyFilter(\Arbor\Model\StudentSchoolworkMark::STUDENT_SCHOOLWORK, \Arbor\Query\Query::OPERATOR_EQUALS, $schoolwork);

    $schoolworkMarks = \Arbor\Model\StudentSchoolworkMark::query($schoolworkMarkQuery);

    $assessments = array();
    foreach ($schoolworkMarks as $schoolworkMark) {
        $markGrade = $schoolworkMark->getMarkGrade();
        $markPupil = $student->getPerson()->getLegalFirstName() . ' ' . $student->getPerson()->getLegalLastName();
        $markDate = $schoolwork->getSubmittedDatetime();

        if ($markGrade) {
            $assessments[] = $markGrade->getGradeCode();
        }
        else {
            $assessments[] = NULL;
        }
    }
    foreach ($assessments as $assessment) {
        echo ($markDate . ' ' . $assessment . ' '. $markPupil) . PHP_EOL;
    }
}
