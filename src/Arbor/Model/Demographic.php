<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Demographic extends ModelBase
{
    public const LABEL = 'label';

    public const SHORT_NAME = 'shortName';

    public const TYPE = 'type';

    public const HAS_INVERSE = 'hasInverse';

    public const INVERSE_LABEL = 'inverseLabel';

    public const DESCRIPTION = 'description';

    public const CALCULATION_CLASS = 'calculationClass';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const CODE = 'code';

    public const CALCULATION_PARAMS = 'calculationParams';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    protected $_resourceType = ResourceType::DEMOGRAPHIC;

    /**
     * @param Query $query
     * @return Demographic[] | Collection
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

        $query->setResourceType(ResourceType::DEMOGRAPHIC);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Demographic
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DEMOGRAPHIC, $id);
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->getProperty('label');
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label = null)
    {
        $this->setProperty('label', $label);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * @param string $type
     */
    public function setType(string $type = null)
    {
        $this->setProperty('type', $type);
    }

    /**
     * @return bool
     */
    public function getHasInverse()
    {
        return $this->getProperty('hasInverse');
    }

    /**
     * @param bool $hasInverse
     */
    public function setHasInverse(bool $hasInverse = null)
    {
        $this->setProperty('hasInverse', $hasInverse);
    }

    /**
     * @return string
     */
    public function getInverseLabel()
    {
        return $this->getProperty('inverseLabel');
    }

    /**
     * @param string $inverseLabel
     */
    public function setInverseLabel(string $inverseLabel = null)
    {
        $this->setProperty('inverseLabel', $inverseLabel);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return string
     */
    public function getCalculationClass()
    {
        return $this->getProperty('calculationClass');
    }

    /**
     * @param string $calculationClass
     */
    public function setCalculationClass(string $calculationClass = null)
    {
        $this->setProperty('calculationClass', $calculationClass);
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
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return string
     */
    public function getCalculationParams()
    {
        return $this->getProperty('calculationParams');
    }

    /**
     * @param string $calculationParams
     */
    public function setCalculationParams(string $calculationParams = null)
    {
        $this->setProperty('calculationParams', $calculationParams);
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
    public function setActive(bool $active = null)
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
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }
}
