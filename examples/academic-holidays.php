<?php

require_once __DIR__ . '/example-bootstrap.php';

$query = new \Arbor\Query\Query(Arbor\Resource\ResourceType::ACADEMIC_HOLIDAY);
$query->addPropertyFilter(\Arbor\Model\AcademicHoliday::START_DATE, \Arbor\Query\Query::OPERATOR_AFTER, '2016-04-06');
$query->addPropertyFilter(\Arbor\Model\AcademicHoliday::END_DATE, \Arbor\Query\Query::OPERATOR_BEFORE, '2018-07-26');
$query->setOrderProperty('endDate');
$academicHolidays = \Arbor\Model\AcademicHoliday::query($query);

foreach ($academicHolidays as $academicHoliday) {
    printf(
        '
        academicHolidayType: %s
        academicHolidayId: %s
        startDate: %s
        endDate: %s
        %s
        ',
        $academicHoliday->getAcademicHolidayType(),
        $academicHoliday->getResourceId(),
        $academicHoliday->getStartDate(),
        $academicHoliday->getEndDate(),
        PHP_EOL
    );
}
