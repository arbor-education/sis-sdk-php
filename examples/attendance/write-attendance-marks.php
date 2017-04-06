<?php

require_once(__DIR__."/../example-bootstrap.php");

use \Arbor\Api\Gateway\RestGateway;
use \Arbor\Model\Student;
use \Arbor\Service\AttendanceRegistration;
use \Arbor\Model\AttendanceMark;
use Guzzle\Plugin\Log\LogPlugin;
use Arbor\Model\ModelBase;

$gateway = new RestGateway(
    $config["api"]["baseUrl"],
    $config["api"]["auth"]["user"],
    $config["api"]["auth"]["password"]
);

//Make the gateway log all HTTP requests to the console for demonstration and debug purposes
$gateway->getHttpClient()->addSubscriber(LogPlugin::getDebugPlugin());

$attendanceService = new AttendanceRegistration($gateway);
ModelBase::setDefaultGateway($gateway);

//Set session start time to today 9AM
$sessionStartTime = new \DateTime('now');
$sessionStartTime->setTimezone(new DateTimeZone("GMT"));
$sessionStartTime->setTime(9,0,0);

//Get some students which we are going to mark
$student12 = Student::retrieve(12);
$student13 = Student::retrieve(13);
$student14 = Student::retrieve(14);

//Get some valid attendance marks
$attMarkPresent = AttendanceMark::retrieve("PRESENT");
$attMarkLate = AttendanceMark::retrieve("LATE");

//Assign marks to students
$attendanceService->awardAttendanceMark($student12, $sessionStartTime, $attMarkPresent);
$attendanceService->awardAttendanceMark($student13, $sessionStartTime, $attMarkPresent);
$attendanceService->awardAttendanceMark($student14, $sessionStartTime, $attMarkLate, 16, "Says he missed the bus");

//Write marks to the server
$attendanceService->saveMarks();