<?php

require_once __DIR__ . '/example-bootstrap.php';

$users = \Arbor\Model\User::query();

$date = new \DateTime();

$query = new \Arbor\Query\Query(Arbor\Resource\ResourceType::ACADEMIC_YEAR_ENROLMENT);
$query->addPropertyFilter(\Arbor\Model\AcademicYearEnrolment::START_DATE, \Arbor\Query\Query::OPERATOR_BEFORE, $date);
$query->addPropertyFilter(\Arbor\Model\AcademicYearEnrolment::END_DATE, \Arbor\Query\Query::OPERATOR_AFTER, $date);
$enrolments = \Arbor\Model\AcademicYearEnrolment::query($query);

$students = [];
foreach ($enrolments as $enrolment) {
    $person = $enrolment->getStudent()->getPerson();
    printf(
        'Student: %s %s%s',
        $person->getLegalFirstName(),
        $person->getLegalLastName(),
        PHP_EOL
    );
}
