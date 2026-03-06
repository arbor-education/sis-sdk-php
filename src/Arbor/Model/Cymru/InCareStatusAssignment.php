<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class InCareStatusAssignment extends ModelBase
{
    public const RESPONSIBLE_LOCAL_AUTHORITY = 'responsibleLocalAuthority';

    protected $_resourceType = ResourceType::CYMRU_IN_CARE_STATUS_ASSIGNMENT;

    /**
     * @param Query $query
     * @return InCareStatusAssignment[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_IN_CARE_STATUS_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InCareStatusAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_IN_CARE_STATUS_ASSIGNMENT, $id);
    }

    /**
     * @return \Arbor\Model\LocalAuthority
     */
    public function getResponsibleLocalAuthority()
    {
        return $this->getProperty('responsibleLocalAuthority');
    }

    /**
     * @param \Arbor\Model\LocalAuthority $responsibleLocalAuthority
     */
    public function setResponsibleLocalAuthority(\Arbor\Model\LocalAuthority $responsibleLocalAuthority = null)
    {
        $this->setProperty('responsibleLocalAuthority', $responsibleLocalAuthority);
    }
}
