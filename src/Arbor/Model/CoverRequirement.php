<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CoverRequirement extends ModelBase
{

    const COVER_EVENT = 'coverEvent';

    const ABSENT_STAFF = 'absentStaff';

    const ABSENCE_EVENT = 'absenceEvent';

    const COVER_PROPOSED_DATETIME = 'coverProposedDatetime';

    const COVER_ARRANGED_DATETIME = 'coverArrangedDatetime';

    const COVER_NOT_REQUIRED_DATETIME = 'coverNotRequiredDatetime';

    protected $_resourceType = ResourceType::COVER_REQUIREMENT;

    /**
     * @param Query $query
     * @return CoverRequirement[] | Collection
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

        $query->setResourceType(ResourceType::COVER_REQUIREMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CoverRequirement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::COVER_REQUIREMENT, $id);
    }

    /**
     * @return ModelBase
     */
    public function getCoverEvent()
    {
        return $this->getProperty('coverEvent');
    }

    /**
     * @param ModelBase $coverEvent
     */
    public function setCoverEvent(ModelBase $coverEvent = null)
    {
        $this->setProperty('coverEvent', $coverEvent);
    }

    /**
     * @return Staff
     */
    public function getAbsentStaff()
    {
        return $this->getProperty('absentStaff');
    }

    /**
     * @param Staff $absentStaff
     */
    public function setAbsentStaff(Staff $absentStaff = null)
    {
        $this->setProperty('absentStaff', $absentStaff);
    }

    /**
     * @return ModelBase
     */
    public function getAbsenceEvent()
    {
        return $this->getProperty('absenceEvent');
    }

    /**
     * @param ModelBase $absenceEvent
     */
    public function setAbsenceEvent(ModelBase $absenceEvent = null)
    {
        $this->setProperty('absenceEvent', $absenceEvent);
    }

    /**
     * @return \DateTime
     */
    public function getCoverProposedDatetime()
    {
        return $this->getProperty('coverProposedDatetime');
    }

    /**
     * @param \DateTime $coverProposedDatetime
     */
    public function setCoverProposedDatetime(\DateTime $coverProposedDatetime = null)
    {
        $this->setProperty('coverProposedDatetime', $coverProposedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCoverArrangedDatetime()
    {
        return $this->getProperty('coverArrangedDatetime');
    }

    /**
     * @param \DateTime $coverArrangedDatetime
     */
    public function setCoverArrangedDatetime(\DateTime $coverArrangedDatetime = null)
    {
        $this->setProperty('coverArrangedDatetime', $coverArrangedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCoverNotRequiredDatetime()
    {
        return $this->getProperty('coverNotRequiredDatetime');
    }

    /**
     * @param \DateTime $coverNotRequiredDatetime
     */
    public function setCoverNotRequiredDatetime(\DateTime $coverNotRequiredDatetime = null)
    {
        $this->setProperty('coverNotRequiredDatetime', $coverNotRequiredDatetime);
    }


}
