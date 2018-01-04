<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationAssessableInstance extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const ASSESSABLE_INSTANCE_IDENTIFIER = 'assessableInstanceIdentifier';

    const QUALIFICATION_ASSESSABLE = 'qualificationAssessable';

    const QUALIFICATION_AVAILABILITY_INSTANCE = 'qualificationAvailabilityInstance';

    const QUALIFICATION_TIMETABLE_SESSION_TYPE = 'qualificationTimetableSessionType';

    const START_DATE_RANGE_FROM = 'startDateRangeFrom';

    const START_DATE_RANGE_UNTIL = 'startDateRangeUntil';

    const DURATION = 'duration';

    const IS_CENTRE_SPECIFIED_TIMETABLE = 'isCentreSpecifiedTimetable';

    const CENTRE_SPECIFIED_DATETIME = 'centreSpecifiedDatetime';

    const CENTRE_SPECIFIED_DURATION = 'centreSpecifiedDuration';

    const IS_PROVISIONAL = 'isProvisional';

    protected $_resourceType = ResourceType::QUALIFICATION_ASSESSABLE_INSTANCE;

    /**
     * @param Query $query
     * @return QualificationAssessableInstance[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
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
    public function setCode($code = null)
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
    public function setActive($active = null)
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
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getAssessableInstanceIdentifier()
    {
        return $this->getProperty('assessableInstanceIdentifier');
    }

    /**
     * @param string $assessableInstanceIdentifier
     */
    public function setAssessableInstanceIdentifier($assessableInstanceIdentifier = null)
    {
        $this->setProperty('assessableInstanceIdentifier', $assessableInstanceIdentifier);
    }

    /**
     * @return QualificationAssessable
     */
    public function getQualificationAssessable()
    {
        return $this->getProperty('qualificationAssessable');
    }

    /**
     * @param QualificationAssessable $qualificationAssessable
     */
    public function setQualificationAssessable(QualificationAssessable $qualificationAssessable = null)
    {
        $this->setProperty('qualificationAssessable', $qualificationAssessable);
    }

    /**
     * @return QualificationAvailabilityInstance
     */
    public function getQualificationAvailabilityInstance()
    {
        return $this->getProperty('qualificationAvailabilityInstance');
    }

    /**
     * @param QualificationAvailabilityInstance $qualificationAvailabilityInstance
     */
    public function setQualificationAvailabilityInstance(QualificationAvailabilityInstance $qualificationAvailabilityInstance = null)
    {
        $this->setProperty('qualificationAvailabilityInstance', $qualificationAvailabilityInstance);
    }

    /**
     * @return QualificationTimetableSessionType
     */
    public function getQualificationTimetableSessionType()
    {
        return $this->getProperty('qualificationTimetableSessionType');
    }

    /**
     * @param QualificationTimetableSessionType $qualificationTimetableSessionType
     */
    public function setQualificationTimetableSessionType(QualificationTimetableSessionType $qualificationTimetableSessionType = null)
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
    public function setDuration($duration = null)
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
    public function setIsCentreSpecifiedTimetable($isCentreSpecifiedTimetable = null)
    {
        $this->setProperty('isCentreSpecifiedTimetable', $isCentreSpecifiedTimetable);
    }

    /**
     * @return \DateTime
     */
    public function getCentreSpecifiedDatetime()
    {
        return $this->getProperty('centreSpecifiedDatetime');
    }

    /**
     * @param \DateTime $centreSpecifiedDatetime
     */
    public function setCentreSpecifiedDatetime(\DateTime $centreSpecifiedDatetime = null)
    {
        $this->setProperty('centreSpecifiedDatetime', $centreSpecifiedDatetime);
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
    public function setCentreSpecifiedDuration($centreSpecifiedDuration = null)
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
    public function setIsProvisional($isProvisional = null)
    {
        $this->setProperty('isProvisional', $isProvisional);
    }


}
