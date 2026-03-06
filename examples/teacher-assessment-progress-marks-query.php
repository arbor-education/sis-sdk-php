<?php

require_once __DIR__ . '/example-bootstrap.php';

$student = \Arbor\Model\Student::retrieve(710);

$query = new \Arbor\Query\Query(Arbor\Resource\ResourceType::STUDENT_PROGRESS_ASSESSMENT_MARK);
$query->addPropertyFilter(\Arbor\Model\StudentProgressAssessmentMark::STUDENT, \Arbor\Query\Query::OPERATOR_EQUALS, $student);

$progressMarks = \Arbor\Model\StudentProgressAssessmentMark::query($query);

foreach ($progressMarks as $progressMark) {
    printf(
        'Student: %s %s -> Assessment: %s %s -> Grade: %s -> Date: %s%s',
        $progressMark->getStudent()->getPerson()->getLegalFirstName(),
        $progressMark->getStudent()->getPerson()->getLegalLastName(),
        $progressMark->getAssessment()->getAssessmentName(),
        $progressMark->getAssessment()->getSubject()? $progressMark->getAssessment()->getSubject()->getSubjectName() : null,
        $progressMark->getGrade() ? $progressMark->getGrade()->getGradeCode() : null,
        $progressMark->getAssessmentDate(),
        PHP_EOL
    );
}
