<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CoverArrangement extends ModelBase
{
    const COVER_REQUIREMENT = 'coverRequirement';

    const COVERING_STAFF = 'coveringStaff';

    const COVER_START_DATETIME = 'coverStartDatetime';

    const COVER_END_DATETIME = 'coverEndDatetime';

    const AGREED_DATETIME = 'agreedDatetime';

    const NOT_AGREED_DATETIME = 'notAgreedDatetime';

    const IS_SEND_CREATION_NOTIFICATION = 'isSendCreationNotification';

    protected $_resourceType = ResourceType::COVER_ARRANGEMENT;

    /**
     * @param Query $query
     * @return CoverArrangement[] | Collection
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

        $query->setResourceType(ResourceType::COVER_ARRANGEMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CoverArrangement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::COVER_ARRANGEMENT, $id);
    }

    /**
     * @return CoverRequirement
     */
    public function getCoverRequirement()
    {
        return $this->getProperty('coverRequirement');
    }

    /**
     * @param CoverRequirement $coverRequirement
     */
    public function setCoverRequirement(CoverRequirement $coverRequirement = null)
    {
        $this->setProperty('coverRequirement', $coverRequirement);
    }

    /**
     * @return Staff
     */
    public function getCoveringStaff()
    {
        return $this->getProperty('coveringStaff');
    }

    /**
     * @param Staff $coveringStaff
     */
    public function setCoveringStaff(Staff $coveringStaff = null)
    {
        $this->setProperty('coveringStaff', $coveringStaff);
    }

    /**
     * @return \DateTime
     */
    public function getCoverStartDatetime()
    {
        return $this->getProperty('coverStartDatetime');
    }

    /**
     * @param \DateTime $coverStartDatetime
     */
    public function setCoverStartDatetime(\DateTime $coverStartDatetime = null)
    {
        $this->setProperty('coverStartDatetime', $coverStartDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCoverEndDatetime()
    {
        return $this->getProperty('coverEndDatetime');
    }

    /**
     * @param \DateTime $coverEndDatetime
     */
    public function setCoverEndDatetime(\DateTime $coverEndDatetime = null)
    {
        $this->setProperty('coverEndDatetime', $coverEndDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getAgreedDatetime()
    {
        return $this->getProperty('agreedDatetime');
    }

    /**
     * @param \DateTime $agreedDatetime
     */
    public function setAgreedDatetime(\DateTime $agreedDatetime = null)
    {
        $this->setProperty('agreedDatetime', $agreedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getNotAgreedDatetime()
    {
        return $this->getProperty('notAgreedDatetime');
    }

    /**
     * @param \DateTime $notAgreedDatetime
     */
    public function setNotAgreedDatetime(\DateTime $notAgreedDatetime = null)
    {
        $this->setProperty('notAgreedDatetime', $notAgreedDatetime);
    }

    /**
     * @return bool
     */
    public function getIsSendCreationNotification()
    {
        return $this->getProperty('isSendCreationNotification');
    }

    /**
     * @param bool $isSendCreationNotification
     */
    public function setIsSendCreationNotification($isSendCreationNotification = null)
    {
        $this->setProperty('isSendCreationNotification', $isSendCreationNotification);
    }
}
