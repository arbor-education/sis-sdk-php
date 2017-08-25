<?php

require_once __DIR__ . '/example-bootstrap.php';

$student = \Arbor\Model\Student::retrieve(278);

$query = new \Arbor\Query\Query(Arbor\Resource\ResourceType::QUALIFICATION_RESULT);
$query->addPropertyFilter(\Arbor\Model\QualificationResult::STUDENT, \Arbor\Query\Query::OPERATOR_EQUALS, $student);

$qualificationResults = \Arbor\Model\QualificationResult::query($query);

$results = [];
foreach ($qualificationResults as $qualificationResult) {
    printf(
        'Student: %s %s -> Result: %s%s',
        $student->getPerson()->getLegalFirstName(),
        $student->getPerson()->getLegalLastName(),
        $qualificationResult->getQualificationGrade()
            ? $qualificationResult->getQualificationGrade()->getShortName()
            : $qualificationResult->getNumericValue(),
        PHP_EOL
    );
}
