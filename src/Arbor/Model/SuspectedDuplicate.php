<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SuspectedDuplicate extends ModelBase
{
    const SUSPECT_ONE = 'suspectOne';

    const SUSPECT_TWO = 'suspectTwo';

    const UNIQUE_KEY = 'uniqueKey';

    const TOTAL_DUPLICATE_SCORE = 'totalDuplicateScore';

    const DUPLICATE_SCORES = 'duplicateScores';

    const RESOLVED_DATETIME = 'resolvedDatetime';

    const RESOLVED_BY_STAFF = 'resolvedByStaff';

    const RESOLUTION = 'resolution';

    protected $_resourceType = ResourceType::SUSPECTED_DUPLICATE;

    /**
     * @param Query $query
     * @return SuspectedDuplicate[] | Collection
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
    public function setSuspectOne(ModelBase $suspectOne = null)
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
    public function setSuspectTwo(ModelBase $suspectTwo = null)
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
    public function setUniqueKey($uniqueKey = null)
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
    public function setTotalDuplicateScore($totalDuplicateScore = null)
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
    public function setDuplicateScores($duplicateScores = null)
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
     * @return Staff
     */
    public function getResolvedByStaff()
    {
        return $this->getProperty('resolvedByStaff');
    }

    /**
     * @param Staff $resolvedByStaff
     */
    public function setResolvedByStaff(Staff $resolvedByStaff = null)
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
    public function setResolution($resolution = null)
    {
        $this->setProperty('resolution', $resolution);
    }
}
