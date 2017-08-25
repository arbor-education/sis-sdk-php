<?php

require_once __DIR__ . '/example-bootstrap.php';

$attendanceService = new \Arbor\Service\AttendanceRegistration($api);

//Set session start time to today 9AM
$sessionStartTime = new \DateTime('now');
$sessionStartTime->setTimezone(new DateTimeZone('GMT'));
$sessionStartTime->setTime(9, 0, 0);

//Get some students which we are going to mark
$student12 = \Arbor\Model\Student::retrieve(12);
$student13 = \Arbor\Model\Student::retrieve(13);
$student14 = \Arbor\Model\Student::retrieve(14);

//Get some valid attendance marks
$attMarkPresent = \Arbor\Model\AttendanceMark::retrieve('PRESENT');
$attMarkLate = \Arbor\Model\AttendanceMark::retrieve('LATE');

//Assign marks to students
$attendanceService->awardAttendanceMark($student12, $sessionStartTime, $attMarkPresent);
$attendanceService->awardAttendanceMark($student13, $sessionStartTime, $attMarkPresent);
$attendanceService->awardAttendanceMark($student14, $sessionStartTime, $attMarkLate, 16, 'Says he missed the bus');

//Write marks to the server
$attendanceService->saveMarks();
