<?php

namespace Arbor\Service;

use Arbor\Api\Gateway\RestGateway;
use Arbor\Model\AttendanceMark;
use Arbor\Model\Hydrator;
use Arbor\Model\ModelBase;
use Arbor\Model\Student;

class AttendanceRegistration
{
    const MARK_STUDENT = 'student';
    const MARK_MARK = 'attendanceMark';
    const MARK_NOTE = 'note';
    const MARK_MINUTES_LATE = 'minutesLate';
    const MARK_SESSION_START_TIME = 'sessionStartTime';
    const ACADEMIC_UNIT= 'academicUnit';
    const INCLUDE_ACADEMIC_UNIT= 'includeAcademicUnit';
    const INCLUDE_EXTRA_MARKS = 'includeExtraMarks';

    /** @var \Arbor\Api\Gateway\RestGateway $_gateway */
    protected $_gateway;
    protected $_hydrator;
    protected $_marks = [];

    public function __construct($gateway=null)
    {
        if (null === $gateway) {
            $gateway = ModelBase::getDefaultGateway();
        }
        $this->setGateway($gateway);

        $this->_hydrator = new Hydrator();
    }

    /**
     * @param Student $student
     * @param \DateTime $sessionStartTime
     * @param AttendanceMark $attendanceMark
     * @param int $minutesLate
     * @param string $note
     */
    public function awardAttendanceMark($student, $sessionStartTime, $attendanceMark, $minutesLate=null, $note=null, $academicUnit=null)
    {
        $this->_marks[] = [
            self::MARK_STUDENT => $student,
            self::MARK_SESSION_START_TIME => $sessionStartTime,
            self::MARK_MARK => $attendanceMark,
            self::MARK_MINUTES_LATE =>$minutesLate,
            self::MARK_NOTE => $note,
            self::ACADEMIC_UNIT => $academicUnit
        ];
    }

    public function saveMarks($includeAcademicUnit = false, bool $includeExtraMarks = false)
    {
        $payload = [];

        $payload['request']['marks'] = [];

        foreach ($this->_marks as $mark) {
            $markPayload = [];

            // Convert models to REST representations
            $markPayload[self::MARK_STUDENT] = $this->getHydrator()->extractArray($mark[self::MARK_STUDENT], true);
            $markPayload[self::MARK_MARK] = $this->getHydrator()->extractArray($mark[self::MARK_MARK], true);

            $academicUnit = null;

            if ($includeAcademicUnit && isset($mark[self::ACADEMIC_UNIT]) && !is_null($mark[self::ACADEMIC_UNIT])) {
                $academicUnit = $this->getHydrator()->extractArray($mark[self::ACADEMIC_UNIT], true);
            }

            $markPayload[self::ACADEMIC_UNIT] = $academicUnit;

            $markPayload[self::INCLUDE_ACADEMIC_UNIT] = $includeAcademicUnit;

            // Convert date to Y-m-d H:i:s string
            /** @var \DateTime $sessionStartTime */
            $sessionStartTime = $mark[self::MARK_SESSION_START_TIME];
            if (!$sessionStartTime instanceof \DateTime) {
                throw new \InvalidArgumentException("SessionStartTime must be an PHP DateTime object");
            }
            $markPayload[self::MARK_SESSION_START_TIME] = $sessionStartTime->format("Y-m-d H:i:s");

            // Only include optional minutesLate and note parameters if not set to NULL
            if (isset($mark[self::MARK_MINUTES_LATE]) && !is_null($mark[self::MARK_MINUTES_LATE])) {
                $markPayload[self::MARK_MINUTES_LATE] = $mark[self::MARK_MINUTES_LATE];
            }
            if (isset($mark[self::MARK_NOTE]) && !is_null($mark[self::MARK_NOTE])) {
                $markPayload[self::MARK_NOTE] = $mark[self::MARK_NOTE];
            }

            if ($includeExtraMarks) {
                $markPayload[self::INCLUDE_EXTRA_MARKS] = $includeExtraMarks;
            }

            $payload['request']['marks'][] = $markPayload;
        }

        $this->getGateway()->sendRequest(
            RestGateway::HTTP_METHOD_POST,
            '/rest-v2/attendance-registration',
            ['body' => $payload]
        );

        $this->_marks = [];
    }

    /**
     * @param \Arbor\Api\Gateway\RestGateway $gateway
     */
    public function setGateway($gateway)
    {
        $this->_gateway = $gateway;
    }

    /**
     * @return \Arbor\Api\Gateway\RestGateway
     */
    public function getGateway()
    {
        return $this->_gateway;
    }

    /**
     * @return Hydrator
     */
    public function getHydrator()
    {
        return $this->_hydrator;
    }
}
