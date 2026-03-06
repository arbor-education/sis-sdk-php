<?php

namespace Arbor\Service;

use Arbor\Api\Gateway\RestGateway;
use Arbor\Model\AttendanceMark;
use Arbor\Model\Hydrator;
use Arbor\Model\ModelBase;
use Arbor\Model\Student;

class AttendanceRollCallRegistration
{
    const MARK_STUDENT = 'student';
    const MARK_MARK = 'attendanceMark';
    const MARK_ROLL_CALL_DATE_TIME = 'rollCallDateTime';
    const MARK_MINUTES_LATE = 'minutesLate';
    const MARK_RECORD_DATE = 'recordDate';
    const MARK_ROLL_CALL = 'rollCall';

    /**@var \Arbor\Api\Gateway\RestGateway $_gateway*/
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
     * @param \DateTime $rollCallDateTime
     * @param AttendanceMark $attendanceMark
     * @param int|null $minutesLate
     */
    public function awardAttendanceMark($student, $rollCallDateTime, $attendanceMark, $minutesLate = null)
    {
        $this->_marks[] = [
            self::MARK_STUDENT => $student,
            self::MARK_ROLL_CALL_DATE_TIME => $rollCallDateTime,
            self::MARK_MARK => $attendanceMark,
            self::MARK_MINUTES_LATE => $minutesLate,
        ];
    }

    /**
     * @param Student $student
     * @param string $recordDate
     * @param string $rollCall
     * @param AttendanceMark $attendanceMark
     * @param int|null $minutesLate
     */
    public function awardAttendanceMarkWithRecordDate($student, $recordDate, $rollCall, $attendanceMark, $minutesLate = null)
    {
        $this->_marks[] = [
            self::MARK_STUDENT => $student,
            self::MARK_RECORD_DATE => $recordDate,
            self::MARK_ROLL_CALL => $rollCall,
            self::MARK_MARK => $attendanceMark,
            self::MARK_MINUTES_LATE => $minutesLate,
        ];
    }

    public function saveMarks()
    {
        $payload = [];

        $payload['request']['marks'] = [];

        foreach ($this->_marks as $mark) {
            $markPayload = [];

            //Convert models to REST representations
            $markPayload[self::MARK_STUDENT] = $this->getHydrator()->extractArray($mark[self::MARK_STUDENT], true);
            $markPayload[self::MARK_MARK] = $this->getHydrator()->extractArray($mark[self::MARK_MARK], true);
            $markPayload[self::MARK_MINUTES_LATE] = $mark[self::MARK_MINUTES_LATE];
            $markPayload[self::MARK_RECORD_DATE] = isset($mark[self::MARK_RECORD_DATE]) ? $mark[self::MARK_RECORD_DATE] : null;
            $markPayload[self::MARK_ROLL_CALL] = isset($mark[self::MARK_ROLL_CALL]) ? $mark[self::MARK_ROLL_CALL] : null;

            if (isset($mark[self::MARK_ROLL_CALL_DATE_TIME])) {
                //Convert date to Y-m-d H:i:s string
                /**@var \DateTime $rollCallDateTime */
                $rollCallDateTime = $mark[self::MARK_ROLL_CALL_DATE_TIME];
                if (!$rollCallDateTime instanceof \DateTime) {
                    throw new \InvalidArgumentException("RollCallDateTime must be an PHP DateTime object");
                }
                $markPayload[self::MARK_ROLL_CALL_DATE_TIME] = $rollCallDateTime->format("Y-m-d H:i:s");
            }

            $payload['request']['marks'][] = $markPayload;
        }

        $this->getGateway()->sendRequest(
            RestGateway::HTTP_METHOD_POST,
            '/rest-v2/attendance-roll-call-registration',
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
