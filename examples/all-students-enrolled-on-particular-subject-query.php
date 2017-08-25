<?php

require_once __DIR__ . '/example-bootstrap.php';

/** @var \Arbor\Model\AcademicUnit $course */
$course = \Arbor\Model\AcademicUnit::retrieve(389);                                                     // MATHS__YEAR_7
$refDate = new \DateTime('2013-12-01');                                                                 // 2013-2014

$query = new \Arbor\Query\Query(Arbor\Resource\ResourceType::ACADEMIC_UNIT_ENROLMENT);
$query->addPropertyFilter(\Arbor\Model\AcademicUnitEnrolment::START_DATE, \Arbor\Query\Query::OPERATOR_BEFORE, $refDate);
$query->addPropertyFilter(\Arbor\Model\AcademicUnitEnrolment::END_DATE, \Arbor\Query\Query::OPERATOR_AFTER, $refDate);
$query->addPropertyFilter(\Arbor\Model\AcademicUnitEnrolment::ACADEMIC_UNIT, \Arbor\Query\Query::OPERATOR_EQUALS, $course);

$currentAcademicUnitEnrolments = \Arbor\Model\AcademicUnitEnrolment::query($query);

foreach ($currentAcademicUnitEnrolments as $currentAcademicUnitEnrolment) {
    printf(
        'Academic Unit: %s -> Student: %s %s%s',
        $course->getAcademicUnitName(),
        $currentAcademicUnitEnrolment->getStudent()->getPerson()->getLegalFirstName(),
        $currentAcademicUnitEnrolment->getStudent()->getPerson()->getLegalLastName(),
        PHP_EOL
    );
}
