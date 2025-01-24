<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CurriculumGrade extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const CURRICULUM_GRADE_NAME = 'curriculumGradeName';

    public const CURRICULUM_TIER = 'curriculumTier';

    public const ACADEMIC_YEAR_INDEX = 'academicYearIndex';

    public const MINIMUM_AGE_AT_START = 'minimumAgeAtStart';

    public const MAXIMUM_AGE_AT_START = 'maximumAgeAtStart';

    public const EXPORT_CODE = 'exportCode';

    public const D00020 = 'd00020';

    public const D00020_ORDER = 'd00020Order';

    protected $_resourceType = ResourceType::CURRICULUM_GRADE;

    /**
     * @param Query $query
     * @return CurriculumGrade[] | Collection
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

        $query->setResourceType(ResourceType::CURRICULUM_GRADE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CurriculumGrade
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CURRICULUM_GRADE, $id);
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
    public function getCurriculumGradeName()
    {
        return $this->getProperty('curriculumGradeName');
    }

    /**
     * @param string $curriculumGradeName
     */
    public function setCurriculumGradeName(string $curriculumGradeName = null)
    {
        $this->setProperty('curriculumGradeName', $curriculumGradeName);
    }

    /**
     * @return \Arbor\Model\CurriculumTier
     */
    public function getCurriculumTier()
    {
        return $this->getProperty('curriculumTier');
    }

    /**
     * @param \Arbor\Model\CurriculumTier $curriculumTier
     */
    public function setCurriculumTier(\Arbor\Model\CurriculumTier $curriculumTier = null)
    {
        $this->setProperty('curriculumTier', $curriculumTier);
    }

    /**
     * @return int
     */
    public function getAcademicYearIndex()
    {
        return $this->getProperty('academicYearIndex');
    }

    /**
     * @param int $academicYearIndex
     */
    public function setAcademicYearIndex(int $academicYearIndex = null)
    {
        $this->setProperty('academicYearIndex', $academicYearIndex);
    }

    /**
     * @return float
     */
    public function getMinimumAgeAtStart()
    {
        return $this->getProperty('minimumAgeAtStart');
    }

    /**
     * @param float $minimumAgeAtStart
     */
    public function setMinimumAgeAtStart(float $minimumAgeAtStart = null)
    {
        $this->setProperty('minimumAgeAtStart', $minimumAgeAtStart);
    }

    /**
     * @return float
     */
    public function getMaximumAgeAtStart()
    {
        return $this->getProperty('maximumAgeAtStart');
    }

    /**
     * @param float $maximumAgeAtStart
     */
    public function setMaximumAgeAtStart(float $maximumAgeAtStart = null)
    {
        $this->setProperty('maximumAgeAtStart', $maximumAgeAtStart);
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
    public function getD00020()
    {
        return $this->getProperty('d00020');
    }

    /**
     * @param string $d00020
     */
    public function setD00020(string $d00020 = null)
    {
        $this->setProperty('d00020', $d00020);
    }

    /**
     * @return int
     */
    public function getD00020Order()
    {
        return $this->getProperty('d00020Order');
    }

    /**
     * @param int $d00020Order
     */
    public function setD00020Order(int $d00020Order = null)
    {
        $this->setProperty('d00020Order', $d00020Order);
    }
}
