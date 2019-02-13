<?php

require_once __DIR__ . '/example-bootstrap.php';


$query = new \Arbor\Query\Query(Arbor\Resource\ResourceType::ACADEMIC_HOLIDAY);
$query->addPropertyFilter(\Arbor\Model\AcademicHoliday::START_DATE, \Arbor\Query\Query::OPERATOR_AFTER, "2016-04-06");
$query->addPropertyFilter(\Arbor\Model\AcademicHoliday::END_DATE, \Arbor\Query\Query::OPERATOR_BEFORE, "2020-09-26");
$academicHolidays = \Arbor\Model\AcademicHoliday::query($query);

foreach ($academicHolidays as $academicHoliday)
{
    printf(
        '
        displayName: %s
        academicHolidayType: %s
        academicHolidayLabel: %s
        academicHolidayId: %s
        startDate: %s
        endDate: %s
        %s
        ',
        $academicHoliday->getDisplayName(),
        $academicHoliday->getAcademicHolidayType(),
        $academicHoliday->getHolidayLabel(),
        $academicHoliday->getResourceId(),
        $academicHoliday->getStartDate(),
        $academicHoliday->getEndDate(),
        PHP_EOL
    );
}