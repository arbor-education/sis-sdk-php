<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InverseDemographic extends ModelBase
{
    public const DEMOGRAPHIC = 'demographic';

    protected $_resourceType = ResourceType::INVERSE_DEMOGRAPHIC;

    /**
     * @param Query $query
     * @return InverseDemographic[] | Collection
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

        $query->setResourceType(ResourceType::INVERSE_DEMOGRAPHIC);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InverseDemographic
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INVERSE_DEMOGRAPHIC, $id);
    }

    /**
     * @return \Arbor\Model\Demographic
     */
    public function getDemographic()
    {
        return $this->getProperty('demographic');
    }

    /**
     * @param \Arbor\Model\Demographic $demographic
     */
    public function setDemographic(\Arbor\Model\Demographic $demographic = null)
    {
        $this->setProperty('demographic', $demographic);
    }
}
