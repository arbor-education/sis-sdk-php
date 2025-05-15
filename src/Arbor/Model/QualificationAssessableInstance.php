<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationAssessableInstance extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const QUALIFICATION_ASSESSABLE = 'qualificationAssessable';

    public const QUALIFICATION_AVAILABILITY_INSTANCE = 'qualificationAvailabilityInstance';

    public const QUALIFICATION_TIMETABLE_SESSION_TYPE = 'qualificationTimetableSessionType';

    public const START_DATE_RANGE_FROM = 'startDateRangeFrom';

    public const USER_DEFINED_START_DATE_RANGE_FROM = 'userDefinedStartDateRangeFrom';

    public const START_DATE_RANGE_UNTIL = 'startDateRangeUntil';

    public const DURATION = 'duration';

    public const IS_CENTRE_SPECIFIED_TIMETABLE = 'isCentreSpecifiedTimetable';

    public const CENTRE_SPECIFIED_DURATION = 'centreSpecifiedDuration';

    public const IS_PROVISIONAL = 'isProvisional';

    public const IS_SHOWN_IN_SCHEDULING = 'isShownInScheduling';

    protected $_resourceType = ResourceType::QUALIFICATION_ASSESSABLE_INSTANCE;

    /**
     * @param Query $query
     * @return QualificationAssessableInstance[] | Collection
     * @throws Exception
     */
    public static function query(\Arbor\Query\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::QUALIFICATION_ASSESSABLE_INSTANCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationAssessableInstance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_ASSESSABLE_INSTANCE, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return \Arbor\Model\QualificationAssessable
     */
    public function getQualificationAssessable()
    {
        return $this->getProperty('qualificationAssessable');
    }

    /**
     * @param \Arbor\Model\QualificationAssessable $qualificationAssessable
     */
    public function setQualificationAssessable(\Arbor\Model\QualificationAssessable $qualificationAssessable = null)
    {
        $this->setProperty('qualificationAssessable', $qualificationAssessable);
    }

    /**
     * @return \Arbor\Model\QualificationAvailabilityInstance
     */
    public function getQualificationAvailabilityInstance()
    {
        return $this->getProperty('qualificationAvailabilityInstance');
    }

    /**
     * @param \Arbor\Model\QualificationAvailabilityInstance
     * $qualificationAvailabilityInstance
     */
    public function setQualificationAvailabilityInstance(\Arbor\Model\QualificationAvailabilityInstance $qualificationAvailabilityInstance = null)
    {
        $this->setProperty('qualificationAvailabilityInstance', $qualificationAvailabilityInstance);
    }

    /**
     * @return \Arbor\Model\QualificationTimetableSessionType
     */
    public function getQualificationTimetableSessionType()
    {
        return $this->getProperty('qualificationTimetableSessionType');
    }

    /**
     * @param \Arbor\Model\QualificationTimetableSessionType
     * $qualificationTimetableSessionType
     */
    public function setQualificationTimetableSessionType(\Arbor\Model\QualificationTimetableSessionType $qualificationTimetableSessionType = null)
    {
        $this->setProperty('qualificationTimetableSessionType', $qualificationTimetableSessionType);
    }

    /**
     * @return \DateTime
     */
    public function getStartDateRangeFrom()
    {
        return $this->getProperty('startDateRangeFrom');
    }

    /**
     * @param \DateTime $startDateRangeFrom
     */
    public function setStartDateRangeFrom(\DateTime $startDateRangeFrom = null)
    {
        $this->setProperty('startDateRangeFrom', $startDateRangeFrom);
    }

    /**
     * @return \DateTime
     */
    public function getUserDefinedStartDateRangeFrom()
    {
        return $this->getProperty('userDefinedStartDateRangeFrom');
    }

    /**
     * @param \DateTime $userDefinedStartDateRangeFrom
     */
    public function setUserDefinedStartDateRangeFrom(\DateTime $userDefinedStartDateRangeFrom = null)
    {
        $this->setProperty('userDefinedStartDateRangeFrom', $userDefinedStartDateRangeFrom);
    }

    /**
     * @return \DateTime
     */
    public function getStartDateRangeUntil()
    {
        return $this->getProperty('startDateRangeUntil');
    }

    /**
     * @param \DateTime $startDateRangeUntil
     */
    public function setStartDateRangeUntil(\DateTime $startDateRangeUntil = null)
    {
        $this->setProperty('startDateRangeUntil', $startDateRangeUntil);
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->getProperty('duration');
    }

    /**
     * @param string $duration
     */
    public function setDuration(string $duration = null)
    {
        $this->setProperty('duration', $duration);
    }

    /**
     * @return bool
     */
    public function getIsCentreSpecifiedTimetable()
    {
        return $this->getProperty('isCentreSpecifiedTimetable');
    }

    /**
     * @param bool $isCentreSpecifiedTimetable
     */
    public function setIsCentreSpecifiedTimetable(bool $isCentreSpecifiedTimetable = null)
    {
        $this->setProperty('isCentreSpecifiedTimetable', $isCentreSpecifiedTimetable);
    }

    /**
     * @return string
     */
    public function getCentreSpecifiedDuration()
    {
        return $this->getProperty('centreSpecifiedDuration');
    }

    /**
     * @param string $centreSpecifiedDuration
     */
    public function setCentreSpecifiedDuration(string $centreSpecifiedDuration = null)
    {
        $this->setProperty('centreSpecifiedDuration', $centreSpecifiedDuration);
    }

    /**
     * @return bool
     */
    public function getIsProvisional()
    {
        return $this->getProperty('isProvisional');
    }

    /**
     * @param bool $isProvisional
     */
    public function setIsProvisional(bool $isProvisional = null)
    {
        $this->setProperty('isProvisional', $isProvisional);
    }

    /**
     * @return bool
     */
    public function getIsShownInScheduling()
    {
        return $this->getProperty('isShownInScheduling');
    }

    /**
     * @param bool $isShownInScheduling
     */
    public function setIsShownInScheduling(bool $isShownInScheduling = null)
    {
        $this->setProperty('isShownInScheduling', $isShownInScheduling);
    }
}
