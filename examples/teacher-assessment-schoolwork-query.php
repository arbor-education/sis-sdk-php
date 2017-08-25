<?php

require_once __DIR__ . '/example-bootstrap.php';

$student = \Arbor\Model\Student::retrieve(710);
$schoolworkQuery = new \Arbor\Query\Query(Arbor\Resource\ResourceType::STUDENT_SCHOOLWORK);
$schoolworkQuery->addPropertyFilter(\Arbor\Model\StudentSchoolwork::STUDENT, \Arbor\Query\Query::OPERATOR_EQUALS, $student);

$schoolWorks = \Arbor\Model\StudentSchoolwork::query($schoolworkQuery);

foreach ($schoolWorks as $schoolWork) {
    $schoolworkMarkQuery = new \Arbor\Query\Query(Arbor\Resource\ResourceType::STUDENT_SCHOOLWORK_MARK);
    $schoolworkMarkQuery->addPropertyFilter(\Arbor\Model\StudentSchoolworkMark::STUDENT_SCHOOLWORK, \Arbor\Query\Query::OPERATOR_EQUALS, $schoolWork);

    $schoolworkMarks = \Arbor\Model\StudentSchoolworkMark::query($schoolworkMarkQuery);

    $assessments = [];
    foreach ($schoolworkMarks as $schoolworkMark) {
        printf(
            'Student: %s %s -> Assessment: %s -> Date: %s%s',
            $student->getPerson()->getLegalFirstName(),
            $student->getPerson()->getLegalLastName(),
            $schoolworkMark->getMarkGrade() ? $schoolworkMark->getMarkGrade()->getGradeCode() : null,
            $schoolWork->getSubmittedDatetime(),
            PHP_EOL
        );
    }
}
