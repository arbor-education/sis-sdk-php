<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SchoolWorkforceCensusBusinessRole extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const EXPORT_CODE = 'exportCode';

    public const DESCRIPTION = 'description';

    public const IS_MAIN_ROLE = 'isMainRole';

    public const IS_VACANCY_OR_LEAVER_CATEGORY = 'isVacancyOrLeaverCategory';

    public const CATEGORY_CODE = 'categoryCode';

    protected $_resourceType = ResourceType::CYMRU_SCHOOL_WORKFORCE_CENSUS_BUSINESS_ROLE;

    /**
     * @param Query $query
     * @return SchoolWorkforceCensusBusinessRole[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_SCHOOL_WORKFORCE_CENSUS_BUSINESS_ROLE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolWorkforceCensusBusinessRole
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_SCHOOL_WORKFORCE_CENSUS_BUSINESS_ROLE, $id);
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

    /**
     * @return string
     */
    public function getExportCode()
    {
        return $this->getProperty('exportCode');
    }

    /**
     * @param string $exportCode
     */
    public function setExportCode(string $exportCode = null)
    {
        $this->setProperty('exportCode', $exportCode);
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
     * @return bool
     */
    public function getIsMainRole()
    {
        return $this->getProperty('isMainRole');
    }

    /**
     * @param bool $isMainRole
     */
    public function setIsMainRole(bool $isMainRole = null)
    {
        $this->setProperty('isMainRole', $isMainRole);
    }

    /**
     * @return bool
     */
    public function getIsVacancyOrLeaverCategory()
    {
        return $this->getProperty('isVacancyOrLeaverCategory');
    }

    /**
     * @param bool $isVacancyOrLeaverCategory
     */
    public function setIsVacancyOrLeaverCategory(bool $isVacancyOrLeaverCategory = null)
    {
        $this->setProperty('isVacancyOrLeaverCategory', $isVacancyOrLeaverCategory);
    }

    /**
     * @return string
     */
    public function getCategoryCode()
    {
        return $this->getProperty('categoryCode');
    }

    /**
     * @param string $categoryCode
     */
    public function setCategoryCode(string $categoryCode = null)
    {
        $this->setProperty('categoryCode', $categoryCode);
    }
}
