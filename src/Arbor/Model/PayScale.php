<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class PayScale extends ModelBase
{
    public const PAY_SCALE_CODE = 'payScaleCode';

    public const PAY_SCALE_NAME = 'payScaleName';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const MINIMUM_SALARY = 'minimumSalary';

    public const MAXIMUM_SALARY = 'maximumSalary';

    public const REGIONAL_PAY_SPINE = 'regionalPaySpine';

    public const PAY_SCALE_CATEGORY = 'payScaleCategory';

    protected $_resourceType = ResourceType::PAY_SCALE;

    /**
     * @param Query $query
     * @return PayScale[] | Collection
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

        $query->setResourceType(ResourceType::PAY_SCALE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PayScale
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PAY_SCALE, $id);
    }

    /**
     * @return string
     */
    public function getPayScaleCode()
    {
        return $this->getProperty('payScaleCode');
    }

    /**
     * @param string $payScaleCode
     */
    public function setPayScaleCode(string $payScaleCode = null)
    {
        $this->setProperty('payScaleCode', $payScaleCode);
    }

    /**
     * @return string
     */
    public function getPayScaleName()
    {
        return $this->getProperty('payScaleName');
    }

    /**
     * @param string $payScaleName
     */
    public function setPayScaleName(string $payScaleName = null)
    {
        $this->setProperty('payScaleName', $payScaleName);
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
    public function getMinimumSalary()
    {
        return $this->getProperty('minimumSalary');
    }

    /**
     * @param string $minimumSalary
     */
    public function setMinimumSalary(string $minimumSalary = null)
    {
        $this->setProperty('minimumSalary', $minimumSalary);
    }

    /**
     * @return string
     */
    public function getMaximumSalary()
    {
        return $this->getProperty('maximumSalary');
    }

    /**
     * @param string $maximumSalary
     */
    public function setMaximumSalary(string $maximumSalary = null)
    {
        $this->setProperty('maximumSalary', $maximumSalary);
    }

    /**
     * @return string
     */
    public function getRegionalPaySpine()
    {
        return $this->getProperty('regionalPaySpine');
    }

    /**
     * @param string $regionalPaySpine
     */
    public function setRegionalPaySpine(string $regionalPaySpine = null)
    {
        $this->setProperty('regionalPaySpine', $regionalPaySpine);
    }

    /**
     * @return \Arbor\Model\UkDfe\PayScaleCategory
     */
    public function getPayScaleCategory()
    {
        return $this->getProperty('payScaleCategory');
    }

    /**
     * @param \Arbor\Model\UkDfe\PayScaleCategory $payScaleCategory
     */
    public function setPayScaleCategory(\Arbor\Model\UkDfe\PayScaleCategory $payScaleCategory = null)
    {
        $this->setProperty('payScaleCategory', $payScaleCategory);
    }
}
