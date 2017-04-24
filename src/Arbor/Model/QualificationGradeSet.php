<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\GradePointScale;

class QualificationGradeSet extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const QUALIFICATION_GRADE_SET_NAME = 'qualificationGradeSetName';

    const SCALE_DIRECTION = 'scaleDirection';

    const GRADE_POINT_SCALE = 'gradePointScale';

    protected $_resourceType = ResourceType::QUALIFICATION_GRADE_SET;

    /**
     * @param \Arbor\Query\Query $query
     * @return QualificationGradeSet[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("QualificationGradeSet");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return QualificationGradeSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::QUALIFICATION_GRADE_SET, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return string
     */
    public function getQualificationGradeSetName()
    {
        return $this->getProperty("qualificationGradeSetName");
    }

    /**
     * @param string $qualificationGradeSetName
     */
    public function setQualificationGradeSetName($qualificationGradeSetName = null)
    {
        $this->setProperty("qualificationGradeSetName", $qualificationGradeSetName);
    }

    /**
     * @return string
     */
    public function getScaleDirection()
    {
        return $this->getProperty("scaleDirection");
    }

    /**
     * @param string $scaleDirection
     */
    public function setScaleDirection($scaleDirection = null)
    {
        $this->setProperty("scaleDirection", $scaleDirection);
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
}
