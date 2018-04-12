<?php

require_once __DIR__ . '/example-bootstrap.php';

$timetableSlot = \Arbor\Model\TimetableSlot::retrieve(1);
$academicUnit = \Arbor\Model\AcademicUnit::retrieve(1);
$oldAcademicUnit = $timetableSlot->getTimetabledObject();
$timetableSlot->setTimetabledObject($academicUnit);
$timetableSlot->connect($api);
$timetableSlot->save();

$timetableSlotCopy = \Arbor\Model\TimetableSlot::retrieve(1);
$hydrator = new \Arbor\Model\Hydrator();
$array = $hydrator->extractArray($timetableSlotCopy);
if ($academicUnit == $timetableSlot->getTimetabledObject()) {
    print "changed\n";
}

// print_r($array);
// die;
