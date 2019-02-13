<?php

require_once __DIR__ . '/example-bootstrap.php';

/** @var \Arbor\Model\AcademicUnit $course */
$course = \Arbor\Model\AcademicUnit::retrieve(34);                                                     // MATHS__YEAR_7
//$refDate = new \DateTime('2018-09-07');                                                                 // 2017-2018

$query = new \Arbor\Query\Query(Arbor\Resource\ResourceType::ACADEMIC_UNIT_ENROLMENT);
$query->addPropertyFilter(\Arbor\Model\AcademicUnitEnrolment::START_DATE, \Arbor\Query\Query::OPERATOR_BEFORE, '2018-09-01');
$query->addPropertyFilter(\Arbor\Model\AcademicUnitEnrolment::END_DATE, \Arbor\Query\Query::OPERATOR_AFTER, '2017-09-01');
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
