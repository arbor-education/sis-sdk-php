<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Staff;

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
     * @param \Arbor\Query\Query $query
     * @return CoverRequirement[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CoverRequirement");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CoverRequirement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::COVER_REQUIREMENT, $id);
    }

    /**
     * @return ModelBase
     */
    public function getCoverEvent()
    {
        return $this->getProperty("coverEvent");
    }

    /**
     * @param ModelBase $coverEvent
     */
    public function setCoverEvent(ModelBase $coverEvent = null)
    {
        $this->setProperty("coverEvent", $coverEvent);
    }

    /**
     * @return Staff
     */
    public function getAbsentStaff()
    {
        return $this->getProperty("absentStaff");
    }

    /**
     * @param Staff $absentStaff
     */
    public function setAbsentStaff(Staff $absentStaff = null)
    {
        $this->setProperty("absentStaff", $absentStaff);
    }

    /**
     * @return ModelBase
     */
    public function getAbsenceEvent()
    {
        return $this->getProperty("absenceEvent");
    }

    /**
     * @param ModelBase $absenceEvent
     */
    public function setAbsenceEvent(ModelBase $absenceEvent = null)
    {
        $this->setProperty("absenceEvent", $absenceEvent);
    }

    /**
     * @return \DateTime
     */
    public function getCoverProposedDatetime()
    {
        return $this->getProperty("coverProposedDatetime");
    }

    /**
     * @param \DateTime $coverProposedDatetime
     */
    public function setCoverProposedDatetime(\DateTime $coverProposedDatetime = null)
    {
        $this->setProperty("coverProposedDatetime", $coverProposedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCoverArrangedDatetime()
    {
        return $this->getProperty("coverArrangedDatetime");
    }

    /**
     * @param \DateTime $coverArrangedDatetime
     */
    public function setCoverArrangedDatetime(\DateTime $coverArrangedDatetime = null)
    {
        $this->setProperty("coverArrangedDatetime", $coverArrangedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCoverNotRequiredDatetime()
    {
        return $this->getProperty("coverNotRequiredDatetime");
    }

    /**
     * @param \DateTime $coverNotRequiredDatetime
     */
    public function setCoverNotRequiredDatetime(\DateTime $coverNotRequiredDatetime = null)
    {
        $this->setProperty("coverNotRequiredDatetime", $coverNotRequiredDatetime);
    }


}
