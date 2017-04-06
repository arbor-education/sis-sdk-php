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

$student = \Arbor\Model\Student::retrieve(710);

$assessmentQuery = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::ASSESSMENT);
$assessmentQuery->addPropertyFilter(\Arbor\Model\Assessment::ASSESSMENT_CODE, \Arbor\Query\Query::OPERATOR_EQUALS, 'UK_DFE__KS2__SCI__SUB__TA__NL');
$assessments = \Arbor\Model\Assessment::query($assessmentQuery);

foreach($assessments AS $assessment)
{
    $markQuery = new \Arbor\Query\Query(\Arbor\Resource\ResourceType::STUDENT_STANDARDIZED_ASSESSMENT);
    $markQuery->addPropertyFilter(\Arbor\Model\StudentStandardizedAssessmentMark::ASSESSMENT, \Arbor\Query\Query::OPERATOR_EQUALS, $assessment);
    $marks = \Arbor\Model\StudentStandardizedAssessmentMark::query($markQuery);

    foreach($marks AS $mark)
    {
        $gc = $mark->getMarkGrade();
        if($gc) {
            $gradeCode = $mark->getMarkGrade()->getGradeCode();
        }
        else {
            $gradeCode = NULL;
        }
    }
    echo "Student: {$student->getPerson()->getLegalFirstName()} {$student->getPerson()->getLegalLastName()} got {$gradeCode} for {$assessment->getAssessmentName()} on {$mark->getAssessmentDate()}\n";
}