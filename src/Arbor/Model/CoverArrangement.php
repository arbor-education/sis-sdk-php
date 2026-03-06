<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CoverArrangement extends ModelBase
{
    public const COVER_REQUIREMENT = 'coverRequirement';

    public const COVERING_STAFF = 'coveringStaff';

    public const COVER_START_DATETIME = 'coverStartDatetime';

    public const COVER_END_DATETIME = 'coverEndDatetime';

    public const AGREED_DATETIME = 'agreedDatetime';

    public const NOT_AGREED_DATETIME = 'notAgreedDatetime';

    public const IS_SEND_CREATION_NOTIFICATION = 'isSendCreationNotification';

    protected $_resourceType = ResourceType::COVER_ARRANGEMENT;

    /**
     * @param Query $query
     * @return CoverArrangement[] | Collection
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
     * @return \Arbor\Model\CoverRequirement
     */
    public function getCoverRequirement()
    {
        return $this->getProperty('coverRequirement');
    }

    /**
     * @param \Arbor\Model\CoverRequirement $coverRequirement
     */
    public function setCoverRequirement(\Arbor\Model\CoverRequirement $coverRequirement = null)
    {
        $this->setProperty('coverRequirement', $coverRequirement);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getCoveringStaff()
    {
        return $this->getProperty('coveringStaff');
    }

    /**
     * @param \Arbor\Model\Staff $coveringStaff
     */
    public function setCoveringStaff(\Arbor\Model\Staff $coveringStaff = null)
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
    public function setIsSendCreationNotification(bool $isSendCreationNotification = null)
    {
        $this->setProperty('isSendCreationNotification', $isSendCreationNotification);
    }
}
