<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Staff;

class SuspectedDuplicate extends ModelBase
{
    const SUSPECT_ONE = 'suspectOne';

    const SUSPECT_TWO = 'suspectTwo';

    const TOTAL_DUPLICATE_SCORE = 'totalDuplicateScore';

    const DUPLICATE_SCORES = 'duplicateScores';

    const RESOLVED_DATETIME = 'resolvedDatetime';

    const RESOLVED_BY_STAFF = 'resolvedByStaff';

    const RESOLUTION = 'resolution';

    protected $_resourceType = ResourceType::SUSPECTED_DUPLICATE;

    /**
     * @param \Arbor\Query\Query $query
     * @return SuspectedDuplicate[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("SuspectedDuplicate");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SuspectedDuplicate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::SUSPECTED_DUPLICATE, $id);
    }

    /**
     * @return ModelBase
     */
    public function getSuspectOne()
    {
        return $this->getProperty("suspectOne");
    }

    /**
     * @param ModelBase $suspectOne
     */
    public function setSuspectOne(ModelBase $suspectOne = null)
    {
        $this->setProperty("suspectOne", $suspectOne);
    }

    /**
     * @return ModelBase
     */
    public function getSuspectTwo()
    {
        return $this->getProperty("suspectTwo");
    }

    /**
     * @param ModelBase $suspectTwo
     */
    public function setSuspectTwo(ModelBase $suspectTwo = null)
    {
        $this->setProperty("suspectTwo", $suspectTwo);
    }

    /**
     * @return int
     */
    public function getTotalDuplicateScore()
    {
        return $this->getProperty("totalDuplicateScore");
    }

    /**
     * @param int $totalDuplicateScore
     */
    public function setTotalDuplicateScore($totalDuplicateScore = null)
    {
        $this->setProperty("totalDuplicateScore", $totalDuplicateScore);
    }

    /**
     * @return string
     */
    public function getDuplicateScores()
    {
        return $this->getProperty("duplicateScores");
    }

    /**
     * @param string $duplicateScores
     */
    public function setDuplicateScores($duplicateScores = null)
    {
        $this->setProperty("duplicateScores", $duplicateScores);
    }

    /**
     * @return \DateTime
     */
    public function getResolvedDatetime()
    {
        return $this->getProperty("resolvedDatetime");
    }

    /**
     * @param \DateTime $resolvedDatetime
     */
    public function setResolvedDatetime(\DateTime $resolvedDatetime = null)
    {
        $this->setProperty("resolvedDatetime", $resolvedDatetime);
    }

    /**
     * @return Staff
     */
    public function getResolvedByStaff()
    {
        return $this->getProperty("resolvedByStaff");
    }

    /**
     * @param Staff $resolvedByStaff
     */
    public function setResolvedByStaff(Staff $resolvedByStaff = null)
    {
        $this->setProperty("resolvedByStaff", $resolvedByStaff);
    }

    /**
     * @return string
     */
    public function getResolution()
    {
        return $this->getProperty("resolution");
    }

    /**
     * @param string $resolution
     */
    public function setResolution($resolution = null)
    {
        $this->setProperty("resolution", $resolution);
    }
}
