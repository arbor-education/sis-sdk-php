<?php
/**
 * Created by PhpStorm.
 * User: djordje
 * Date: 10/1/18
 * Time: 10:06 PM
 */
require_once __DIR__ . '/example-bootstrap.php';

$calendarEntryMapping = new \Arbor\Query\Query(Arbor\Resource\ResourceType::CALENDAR_ENTRY_MAPPING);
$student = $api->retrieve(\Arbor\Resource\ResourceType::STUDENT, 1224);

$calendarEntryMapping->addPropertyFilter(Arbor\Model\CalendarEntryMapping::START_DATETIME,
    \Arbor\Query\Query::OPERATOR_AFTER, '2018-10-08 08:00:00');

$calendarEntryMapping->addPropertyFilter(Arbor\Model\CalendarEntryMapping::END_DATETIME,
    \Arbor\Query\Query::OPERATOR_BEFORE, '2018-10-10 08:00:00');

$calendarEntryMapping->addPropertyFilter(Arbor\Model\CalendarEntryMapping::MAPPED,
    \Arbor\Query\Query::OPERATOR_EQUALS, $student);

$calendarEntryMappings = \Arbor\Model\CalendarEntryMapping::query($calendarEntryMapping);

foreach ($calendarEntryMappings as $cem){
    printf(
        'Calendar ID: %s, Event Type: %s, StartDatetime: %s, EndDatetime: %s%s',
        $cem->getCalendar()->getProperty('id'),
        $cem->getEvent()->getResourceType(),
        $cem->getStartDatetime(),
        $cem->getEndDatetime(),
        PHP_EOL
    );
}