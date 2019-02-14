<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class GradePointScaleLevelGradeSet extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const GRADE_POINT_SCALE = 'gradePointScale';

    const GRADE_SET = 'gradeSet';

    const LEVEL_TYPE = 'levelType';

    const APPLIES_TO_SEN_STUDENT_ONLY = 'appliesToSenStudentOnly';

    protected $_resourceType = ResourceType::GRADE_POINT_SCALE_LEVEL_GRADE_SET;

    /**
     * @param Query $query
     * @return GradePointScaleLevelGradeSet[] | Collection
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
     * @return GradePointScale
     */
    public function getGradePointScale()
    {
        return $this->getProperty('gradePointScale');
    }

    /**
     * @param GradePointScale $gradePointScale
     */
    public function setGradePointScale(GradePointScale $gradePointScale = null)
    {
        $this->setProperty('gradePointScale', $gradePointScale);
    }

    /**
     * @return GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty('gradeSet');
    }

    /**
     * @param GradeSet $gradeSet
     */
    public function setGradeSet(GradeSet $gradeSet = null)
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
    public function setLevelType($levelType = null)
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
    public function setAppliesToSenStudentOnly($appliesToSenStudentOnly = null)
    {
        $this->setProperty('appliesToSenStudentOnly', $appliesToSenStudentOnly);
    }


}
