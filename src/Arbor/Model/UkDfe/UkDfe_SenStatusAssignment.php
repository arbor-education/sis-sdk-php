<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class UkDfe_SenStatusAssignment extends ModelBase
{

    const IS_MEMBER_OF_SEN_UNIT = 'isMemberOfSenUnit';

    const HAS_RESOURCED_PROVISION = 'hasResourcedProvision';

    protected $_resourceType = ResourceType::UK_DFE_SEN_STATUS_ASSIGNMENT;

    /**
     * @param Query $query
     * @return UkDfe_SenStatusAssignment[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_SEN_STATUS_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UkDfe_SenStatusAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_SEN_STATUS_ASSIGNMENT, $id);
    }

    /**
     * @return bool
     */
    public function getIsMemberOfSenUnit()
    {
        return $this->getProperty('isMemberOfSenUnit');
    }

    /**
     * @param bool $isMemberOfSenUnit
     */
    public function setIsMemberOfSenUnit($isMemberOfSenUnit = null)
    {
        $this->setProperty('isMemberOfSenUnit', $isMemberOfSenUnit);
    }

    /**
     * @return bool
     */
    public function getHasResourcedProvision()
    {
        return $this->getProperty('hasResourcedProvision');
    }

    /**
     * @param bool $hasResourcedProvision
     */
    public function setHasResourcedProvision($hasResourcedProvision = null)
    {
        $this->setProperty('hasResourcedProvision', $hasResourcedProvision);
    }


}
