<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class PermanentExclusion extends ModelBase
{
    public const EXCLUDE_FROM_SCHOOL_CENSUS = 'excludeFromSchoolCensus';

    protected $_resourceType = ResourceType::CYMRU_PERMANENT_EXCLUSION;

    /**
     * @param Query $query
     * @return PermanentExclusion[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_PERMANENT_EXCLUSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PermanentExclusion
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_PERMANENT_EXCLUSION, $id);
    }

    /**
     * @return bool
     */
    public function getExcludeFromSchoolCensus()
    {
        return $this->getProperty('excludeFromSchoolCensus');
    }

    /**
     * @param bool $excludeFromSchoolCensus
     */
    public function setExcludeFromSchoolCensus(bool $excludeFromSchoolCensus = null)
    {
        $this->setProperty('excludeFromSchoolCensus', $excludeFromSchoolCensus);
    }
}
