<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Probation extends ModelBase
{
    public const STAFF_CONTRACT = 'staffContract';

    public const START_DATE = 'startDate';

    public const ORIGINAL_END_DATE = 'originalEndDate';

    public const CURRENT_END_DATE = 'currentEndDate';

    public const PROBATION_DECISION = 'probationDecision';

    protected $_resourceType = ResourceType::PROBATION;

    /**
     * @param Query $query
     * @return Probation[] | Collection
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

        $query->setResourceType(ResourceType::PROBATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Probation
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROBATION, $id);
    }

    /**
     * @return \Arbor\Model\StaffContract
     */
    public function getStaffContract()
    {
        return $this->getProperty('staffContract');
    }

    /**
     * @param \Arbor\Model\StaffContract $staffContract
     */
    public function setStaffContract(\Arbor\Model\StaffContract $staffContract = null)
    {
        $this->setProperty('staffContract', $staffContract);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getOriginalEndDate()
    {
        return $this->getProperty('originalEndDate');
    }

    /**
     * @param \DateTime $originalEndDate
     */
    public function setOriginalEndDate(\DateTime $originalEndDate = null)
    {
        $this->setProperty('originalEndDate', $originalEndDate);
    }

    /**
     * @return \DateTime
     */
    public function getCurrentEndDate()
    {
        return $this->getProperty('currentEndDate');
    }

    /**
     * @param \DateTime $currentEndDate
     */
    public function setCurrentEndDate(\DateTime $currentEndDate = null)
    {
        $this->setProperty('currentEndDate', $currentEndDate);
    }

    /**
     * @return string
     */
    public function getProbationDecision()
    {
        return $this->getProperty('probationDecision');
    }

    /**
     * @param string $probationDecision
     */
    public function setProbationDecision(string $probationDecision = null)
    {
        $this->setProperty('probationDecision', $probationDecision);
    }
}
