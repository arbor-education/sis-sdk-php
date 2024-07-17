<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BookableResourcePeriod extends ModelBase
{
    public const RESOURCE = 'resource';

    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    protected $_resourceType = ResourceType::BOOKABLE_RESOURCE_PERIOD;

    /**
     * @param Query $query
     * @return BookableResourcePeriod[] | Collection
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

        $query->setResourceType(ResourceType::BOOKABLE_RESOURCE_PERIOD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BookableResourcePeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BOOKABLE_RESOURCE_PERIOD, $id);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getResource()
    {
        return $this->getProperty('resource');
    }

    /**
     * @param \Arbor\Model\Staff $resource
     */
    public function setResource(\Arbor\Model\Staff $resource = null)
    {
        $this->setProperty('resource', $resource);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }
}
