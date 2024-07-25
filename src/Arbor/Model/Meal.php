<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Meal extends ModelBase
{
    public const ACADEMIC_YEAR = 'academicYear';

    public const MEAL_NAME = 'mealName';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    public const CUSTOMER_ACCOUNT_TYPE = 'customerAccountType';

    public const COPIED_TO_MEAL = 'copiedToMeal';

    protected $_resourceType = ResourceType::MEAL;

    /**
     * @param Query $query
     * @return Meal[] | Collection
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

        $query->setResourceType(ResourceType::MEAL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Meal
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEAL, $id);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return string
     */
    public function getMealName()
    {
        return $this->getProperty('mealName');
    }

    /**
     * @param string $mealName
     */
    public function setMealName(string $mealName = null)
    {
        $this->setProperty('mealName', $mealName);
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
     * @return \Arbor\Model\CustomerAccountType
     */
    public function getCustomerAccountType()
    {
        return $this->getProperty('customerAccountType');
    }

    /**
     * @param \Arbor\Model\CustomerAccountType $customerAccountType
     */
    public function setCustomerAccountType(\Arbor\Model\CustomerAccountType $customerAccountType = null)
    {
        $this->setProperty('customerAccountType', $customerAccountType);
    }

    /**
     * @return \Arbor\Model\Meal
     */
    public function getCopiedToMeal()
    {
        return $this->getProperty('copiedToMeal');
    }

    /**
     * @param \Arbor\Model\Meal $copiedToMeal
     */
    public function setCopiedToMeal(\Arbor\Model\Meal $copiedToMeal = null)
    {
        $this->setProperty('copiedToMeal', $copiedToMeal);
    }
}
