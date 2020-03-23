<?php

require_once __DIR__ . '/example-bootstrap.php';

$student = \Arbor\Model\Student::retrieve(710);

$query = new \Arbor\Query\Query(Arbor\Resource\ResourceType::ASSESSMENT);
$query->addPropertyFilter(\Arbor\Model\Assessment::CODE, \Arbor\Query\Query::OPERATOR_EQUALS, 'UK_DFE__KS2__SCI__SUB__TA__NL');
$assessments = \Arbor\Model\Assessment::query($query);

foreach ($assessments as $assessment) {
    $query = new \Arbor\Query\Query(Arbor\Resource\ResourceType::STUDENT_STANDARDIZED_ASSESSMENT);
    $query->addPropertyFilter(\Arbor\Model\StudentStandardizedAssessmentMark::STANDARDIZED_ASSESSMENT, \Arbor\Query\Query::OPERATOR_EQUALS, $assessment);
    $marks = \Arbor\Model\StudentStandardizedAssessmentMark::query($query);

    foreach ($marks as $mark) {
        if ($mark->getMarkGrade() === null) {
            continue;
        }

        printf(
            'Student: %s %s got %s for %s on %s%s',
            $student->getPerson()->getLegalFirstName(),
            $student->getPerson()->getLegalLastName(),
            $mark->getMarkGrade()->getGradeCode(),
            $assessment->getAssessmentName(),
            $mark->getAssessmentDate(),
            PHP_EOL
        );
    }
}
