<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationAvailabilityInstance extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const AWARDING_ORGANIZATION = 'awardingOrganization';

    const QUALIFICATION_AVAILABILITY_IDENTIFIER = 'qualificationAvailabilityIdentifier';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const EDI_AWARDING_BODY_IDENTIFIER = 'ediAwardingBodyIdentifier';

    protected $_resourceType = ResourceType::QUALIFICATION_AVAILABILITY_INSTANCE;

    /**
     * @param Query $query
     * @return QualificationAvailabilityInstance[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_AVAILABILITY_INSTANCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationAvailabilityInstance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_AVAILABILITY_INSTANCE, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return AwardingOrganization
     */
    public function getAwardingOrganization()
    {
        return $this->getProperty('awardingOrganization');
    }

    /**
     * @param AwardingOrganization $awardingOrganization
     */
    public function setAwardingOrganization(AwardingOrganization $awardingOrganization = null)
    {
        $this->setProperty('awardingOrganization', $awardingOrganization);
    }

    /**
     * @return string
     */
    public function getQualificationAvailabilityIdentifier()
    {
        return $this->getProperty('qualificationAvailabilityIdentifier');
    }

    /**
     * @param string $qualificationAvailabilityIdentifier
     */
    public function setQualificationAvailabilityIdentifier($qualificationAvailabilityIdentifier = null)
    {
        $this->setProperty('qualificationAvailabilityIdentifier', $qualificationAvailabilityIdentifier);
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
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getEdiAwardingBodyIdentifier()
    {
        return $this->getProperty('ediAwardingBodyIdentifier');
    }

    /**
     * @param string $ediAwardingBodyIdentifier
     */
    public function setEdiAwardingBodyIdentifier($ediAwardingBodyIdentifier = null)
    {
        $this->setProperty('ediAwardingBodyIdentifier', $ediAwardingBodyIdentifier);
    }
}
