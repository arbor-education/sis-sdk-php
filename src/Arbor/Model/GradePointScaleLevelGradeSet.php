<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\GradePointScale;
use \Arbor\Model\GradeSet;

class GradePointScaleLevelGradeSet extends ModelBase
{
    const GRADE_POINT_SCALE = 'gradePointScale';

    const GRADE_SET = 'gradeSet';

    const LEVEL_TYPE = 'levelType';

    const APPLIES_TO_SEN_STUDENT_ONLY = 'appliesToSenStudentOnly';

    protected $_resourceType = ResourceType::GRADE_POINT_SCALE_LEVEL_GRADE_SET;

    /**
     * @param \Arbor\Query\Query $query
     * @return GradePointScaleLevelGradeSet[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("GradePointScaleLevelGradeSet");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return GradePointScaleLevelGradeSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GRADE_POINT_SCALE_LEVEL_GRADE_SET, $id);
    }

    /**
     * @return GradePointScale
     */
    public function getGradePointScale()
    {
        return $this->getProperty("gradePointScale");
    }

    /**
     * @param GradePointScale $gradePointScale
     */
    public function setGradePointScale(GradePointScale $gradePointScale = null)
    {
        $this->setProperty("gradePointScale", $gradePointScale);
    }

    /**
     * @return GradeSet
     */
    public function getGradeSet()
    {
        return $this->getProperty("gradeSet");
    }

    /**
     * @param GradeSet $gradeSet
     */
    public function setGradeSet(GradeSet $gradeSet = null)
    {
        $this->setProperty("gradeSet", $gradeSet);
    }

    /**
     * @return string
     */
    public function getLevelType()
    {
        return $this->getProperty("levelType");
    }

    /**
     * @param string $levelType
     */
    public function setLevelType($levelType = null)
    {
        $this->setProperty("levelType", $levelType);
    }

    /**
     * @return bool
     */
    public function getAppliesToSenStudentOnly()
    {
        return $this->getProperty("appliesToSenStudentOnly");
    }

    /**
     * @param bool $appliesToSenStudentOnly
     */
    public function setAppliesToSenStudentOnly($appliesToSenStudentOnly = null)
    {
        $this->setProperty("appliesToSenStudentOnly", $appliesToSenStudentOnly);
    }
}
