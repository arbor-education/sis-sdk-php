<?php

require_once __DIR__ . '/example-bootstrap.php';

$academicUnitsQuery = new \Arbor\Query\Query(Arbor\Resource\ResourceType::ACADEMIC_UNIT);
$academicUnitsQuery->addPropertyFilter(\Arbor\Model\AcademicUnit::ACADEMIC_UNIT_NAME, \Arbor\Query\Query::OPERATOR_EQUALS, '7TE-CI');
$academicUnits = \Arbor\Model\AcademicUnit::query($academicUnitsQuery);

foreach ($academicUnits as $academicUnit) {
    $academicUnitLeadsQuery = new \Arbor\Query\Query(Arbor\Resource\ResourceType::ACADEMIC_UNIT_LEAD);
    $academicUnitLeadsQuery->addPropertyFilter(\Arbor\Model\AcademicUnitLead::ACADEMIC_UNIT, \Arbor\Query\Query::OPERATOR_EQUALS, $academicUnit);
    $academicUnitLeads = \Arbor\Model\AcademicUnitLead::query($academicUnitLeadsQuery);

    foreach ($academicUnitLeads as $academicUnitLead) {
        printf(
            'Academic Unit %s -> Lead: %s %s -> %s - %s%s',
            $academicUnit->getAcademicUnitName(),
            $academicUnitLead->getStaff()->getPerson()->getLegalFirstName(),
            $academicUnitLead->getStaff()->getPerson()->getLegalLastName(),
            $academicUnitLead->getStartDate(),
            $academicUnitLead->getEndDate(),
            PHP_EOL
        );
    }
}
