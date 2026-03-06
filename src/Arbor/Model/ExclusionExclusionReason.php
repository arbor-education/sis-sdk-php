<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ExclusionExclusionReason extends ModelBase
{
    public const EXCLUSION = 'exclusion';

    public const EXCLUSION_REASON = 'exclusionReason';

    protected $_resourceType = ResourceType::EXCLUSION_EXCLUSION_REASON;

    /**
     * @param Query $query
     * @return ExclusionExclusionReason[] | Collection
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

        $query->setResourceType(ResourceType::EXCLUSION_EXCLUSION_REASON);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ExclusionExclusionReason
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EXCLUSION_EXCLUSION_REASON, $id);
    }

    /**
     * @return ModelBase
     */
    public function getExclusion()
    {
        return $this->getProperty('exclusion');
    }

    /**
     * @param ModelBase $exclusion
     */
    public function setExclusion(\ModelBase $exclusion = null)
    {
        $this->setProperty('exclusion', $exclusion);
    }

    /**
     * @return \Arbor\Model\ExclusionReason
     */
    public function getExclusionReason()
    {
        return $this->getProperty('exclusionReason');
    }

    /**
     * @param \Arbor\Model\ExclusionReason $exclusionReason
     */
    public function setExclusionReason(\Arbor\Model\ExclusionReason $exclusionReason = null)
    {
        $this->setProperty('exclusionReason', $exclusionReason);
    }
}
