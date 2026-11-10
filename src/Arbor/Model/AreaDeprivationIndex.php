<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AreaDeprivationIndex extends ModelBase
{
    public const AREA_REFERENCE = 'areaReference';

    public const YEAR = 'year';

    public const DECILE = 'decile';

    public const RANK = 'rank';

    protected $_resourceType = ResourceType::AREA_DEPRIVATION_INDEX;

    /**
     * @param Query $query
     * @return AreaDeprivationIndex[] | Collection
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

        $query->setResourceType(ResourceType::AREA_DEPRIVATION_INDEX);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AreaDeprivationIndex
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::AREA_DEPRIVATION_INDEX, $id);
    }

    /**
     * @return string
     */
    public function getAreaReference()
    {
        return $this->getProperty('areaReference');
    }

    /**
     * @param string $areaReference
     */
    public function setAreaReference(string $areaReference = null)
    {
        $this->setProperty('areaReference', $areaReference);
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->getProperty('year');
    }

    /**
     * @param int $year
     */
    public function setYear(int $year = null)
    {
        $this->setProperty('year', $year);
    }

    /**
     * @return int
     */
    public function getDecile()
    {
        return $this->getProperty('decile');
    }

    /**
     * @param int $decile
     */
    public function setDecile(int $decile = null)
    {
        $this->setProperty('decile', $decile);
    }

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->getProperty('rank');
    }

    /**
     * @param int $rank
     */
    public function setRank(int $rank = null)
    {
        $this->setProperty('rank', $rank);
    }
}
