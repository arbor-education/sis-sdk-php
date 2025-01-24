<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CoverArrangementSuggestion extends ModelBase
{
    public const COVER_REQUIREMENT = 'coverRequirement';

    public const STAFF = 'staff';

    public const COVER_ARRANGEMENT = 'coverArrangement';

    public const REASON = 'reason';

    public const STATUS = 'status';

    protected $_resourceType = ResourceType::COVER_ARRANGEMENT_SUGGESTION;

    /**
     * @param Query $query
     * @return CoverArrangementSuggestion[] | Collection
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

        $query->setResourceType(ResourceType::COVER_ARRANGEMENT_SUGGESTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CoverArrangementSuggestion
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::COVER_ARRANGEMENT_SUGGESTION, $id);
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
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return \Arbor\Model\CoverArrangement
     */
    public function getCoverArrangement()
    {
        return $this->getProperty('coverArrangement');
    }

    /**
     * @param \Arbor\Model\CoverArrangement $coverArrangement
     */
    public function setCoverArrangement(\Arbor\Model\CoverArrangement $coverArrangement = null)
    {
        $this->setProperty('coverArrangement', $coverArrangement);
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->getProperty('reason');
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason = null)
    {
        $this->setProperty('reason', $reason);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status = null)
    {
        $this->setProperty('status', $status);
    }
}
