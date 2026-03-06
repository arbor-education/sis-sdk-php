<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class SuperannuationSchemeValue extends ModelBase
{
    public const SUPERANNUATION_SCHEME = 'superannuationScheme';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const VALUE = 'value';

    protected $_resourceType = ResourceType::SUPERANNUATION_SCHEME_VALUE;

    /**
     * @param Query $query
     * @return SuperannuationSchemeValue[] | Collection
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

        $query->setResourceType(ResourceType::SUPERANNUATION_SCHEME_VALUE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SuperannuationSchemeValue
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SUPERANNUATION_SCHEME_VALUE, $id);
    }

    /**
     * @return \Arbor\Model\SuperannuationScheme
     */
    public function getSuperannuationScheme()
    {
        return $this->getProperty('superannuationScheme');
    }

    /**
     * @param \Arbor\Model\SuperannuationScheme $superannuationScheme
     */
    public function setSuperannuationScheme(\Arbor\Model\SuperannuationScheme $superannuationScheme = null)
    {
        $this->setProperty('superannuationScheme', $superannuationScheme);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
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
     * @return float
     */
    public function getValue()
    {
        return $this->getProperty('value');
    }

    /**
     * @param float $value
     */
    public function setValue(float $value = null)
    {
        $this->setProperty('value', $value);
    }
}
