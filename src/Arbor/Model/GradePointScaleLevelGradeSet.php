<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class GradePointScaleLevelGradeSet extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const GRADE_POINT_SCALE = 'gradePointScale';

    public const GRADE_SET = 'gradeSet';

    public const LEVEL_TYPE = 'levelType';

    public const APPLIES_TO_SEN_STUDENT_ONLY = 'appliesToSenStudentOnly';

    protected $_resourceType = ResourceType::GRADE_POINT_SCALE_LEVEL_GRADE_SET;

    /**
     * @param Query $query
     * @return GradePointScaleLevelGradeSet[] | Collection
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

        $query->setResourceType(ResourceType::GRADE_POINT_SCALE_LEVEL_GRADE_SET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return GradePointScaleLevelGradeSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GRADE_POINT_SCALE_LEVEL_GRADE_SET, $id);
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
     * @return \Arbor\Model\GradePointScale
     */
    public function getGradePointScale()
    {
        return $this->getProperty('gradePointScale');
    }

    /**
     * @param \Arbor\Model\GradePointScale $gradePointScale
     */
    public function setGradePointScale(\Arbor\Model\GradePointScale $gradePointScale = null)
    {
        $this->setProperty('gradePointScale', $gradePointScale);
    }

    /**
     * @return \Arbor\Model\GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty('gradeSet');
    }

    /**
     * @param \Arbor\Model\GradeSet $gradeSet
     */
    public function setGradeSet(\Arbor\Model\GradeSet $gradeSet = null)
    {
        $this->setProperty('gradeSet', $gradeSet);
    }

    /**
     * @return string
     */
    public function getLevelType()
    {
        return $this->getProperty('levelType');
    }

    /**
     * @param string $levelType
     */
    public function setLevelType(string $levelType = null)
    {
        $this->setProperty('levelType', $levelType);
    }

    /**
     * @return bool
     */
    public function getAppliesToSenStudentOnly()
    {
        return $this->getProperty('appliesToSenStudentOnly');
    }

    /**
     * @param bool $appliesToSenStudentOnly
     */
    public function setAppliesToSenStudentOnly(bool $appliesToSenStudentOnly = null)
    {
        $this->setProperty('appliesToSenStudentOnly', $appliesToSenStudentOnly);
    }
}
