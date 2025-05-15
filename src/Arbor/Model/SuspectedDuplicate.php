<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SuspectedDuplicate extends ModelBase
{
    public const SUSPECT_ONE = 'suspectOne';

    public const SUSPECT_TWO = 'suspectTwo';

    public const UNIQUE_KEY = 'uniqueKey';

    public const TOTAL_DUPLICATE_SCORE = 'totalDuplicateScore';

    public const DUPLICATE_SCORES = 'duplicateScores';

    public const RESOLVED_DATETIME = 'resolvedDatetime';

    public const RESOLUTION_APPROVAL_REQUESTED_BY_STAFF = 'resolutionApprovalRequestedByStaff';

    public const RESOLUTION_APPROVAL_REQUESTED_FROM_STAFF = 'resolutionApprovalRequestedFromStaff';

    public const RESOLUTION_APPROVED_BY_STAFF = 'resolutionApprovedByStaff';

    public const RESOLVED_BY_STAFF = 'resolvedByStaff';

    public const RESOLUTION = 'resolution';

    protected $_resourceType = ResourceType::SUSPECTED_DUPLICATE;

    /**
     * @param Query $query
     * @return SuspectedDuplicate[] | Collection
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

        $query->setResourceType(ResourceType::SUSPECTED_DUPLICATE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SuspectedDuplicate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SUSPECTED_DUPLICATE, $id);
    }

    /**
     * @return ModelBase
     */
    public function getSuspectOne()
    {
        return $this->getProperty('suspectOne');
    }

    /**
     * @param ModelBase $suspectOne
     */
    public function setSuspectOne(\ModelBase $suspectOne = null)
    {
        $this->setProperty('suspectOne', $suspectOne);
    }

    /**
     * @return ModelBase
     */
    public function getSuspectTwo()
    {
        return $this->getProperty('suspectTwo');
    }

    /**
     * @param ModelBase $suspectTwo
     */
    public function setSuspectTwo(\ModelBase $suspectTwo = null)
    {
        $this->setProperty('suspectTwo', $suspectTwo);
    }

    /**
     * @return string
     */
    public function getUniqueKey()
    {
        return $this->getProperty('uniqueKey');
    }

    /**
     * @param string $uniqueKey
     */
    public function setUniqueKey(string $uniqueKey = null)
    {
        $this->setProperty('uniqueKey', $uniqueKey);
    }

    /**
     * @return int
     */
    public function getTotalDuplicateScore()
    {
        return $this->getProperty('totalDuplicateScore');
    }

    /**
     * @param int $totalDuplicateScore
     */
    public function setTotalDuplicateScore(int $totalDuplicateScore = null)
    {
        $this->setProperty('totalDuplicateScore', $totalDuplicateScore);
    }

    /**
     * @return string
     */
    public function getDuplicateScores()
    {
        return $this->getProperty('duplicateScores');
    }

    /**
     * @param string $duplicateScores
     */
    public function setDuplicateScores(string $duplicateScores = null)
    {
        $this->setProperty('duplicateScores', $duplicateScores);
    }

    /**
     * @return \DateTime
     */
    public function getResolvedDatetime()
    {
        return $this->getProperty('resolvedDatetime');
    }

    /**
     * @param \DateTime $resolvedDatetime
     */
    public function setResolvedDatetime(\DateTime $resolvedDatetime = null)
    {
        $this->setProperty('resolvedDatetime', $resolvedDatetime);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getResolutionApprovalRequestedByStaff()
    {
        return $this->getProperty('resolutionApprovalRequestedByStaff');
    }

    /**
     * @param \Arbor\Model\Staff $resolutionApprovalRequestedByStaff
     */
    public function setResolutionApprovalRequestedByStaff(\Arbor\Model\Staff $resolutionApprovalRequestedByStaff = null)
    {
        $this->setProperty('resolutionApprovalRequestedByStaff', $resolutionApprovalRequestedByStaff);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getResolutionApprovalRequestedFromStaff()
    {
        return $this->getProperty('resolutionApprovalRequestedFromStaff');
    }

    /**
     * @param \Arbor\Model\Staff $resolutionApprovalRequestedFromStaff
     */
    public function setResolutionApprovalRequestedFromStaff(\Arbor\Model\Staff $resolutionApprovalRequestedFromStaff = null)
    {
        $this->setProperty('resolutionApprovalRequestedFromStaff', $resolutionApprovalRequestedFromStaff);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getResolutionApprovedByStaff()
    {
        return $this->getProperty('resolutionApprovedByStaff');
    }

    /**
     * @param \Arbor\Model\Staff $resolutionApprovedByStaff
     */
    public function setResolutionApprovedByStaff(\Arbor\Model\Staff $resolutionApprovedByStaff = null)
    {
        $this->setProperty('resolutionApprovedByStaff', $resolutionApprovedByStaff);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getResolvedByStaff()
    {
        return $this->getProperty('resolvedByStaff');
    }

    /**
     * @param \Arbor\Model\Staff $resolvedByStaff
     */
    public function setResolvedByStaff(\Arbor\Model\Staff $resolvedByStaff = null)
    {
        $this->setProperty('resolvedByStaff', $resolvedByStaff);
    }

    /**
     * @return string
     */
    public function getResolution()
    {
        return $this->getProperty('resolution');
    }

    /**
     * @param string $resolution
     */
    public function setResolution(string $resolution = null)
    {
        $this->setProperty('resolution', $resolution);
    }
}
