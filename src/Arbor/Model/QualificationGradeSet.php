<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationGradeSet extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const NAME = 'name';

    public const SCALE_DIRECTION = 'scaleDirection';

    public const GRADE_POINT_SCALE = 'gradePointScale';

    protected $_resourceType = ResourceType::QUALIFICATION_GRADE_SET;

    /**
     * @param Query $query
     * @return QualificationGradeSet[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_GRADE_SET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationGradeSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_GRADE_SET, $id);
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
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return string
     */
    public function getScaleDirection()
    {
        return $this->getProperty('scaleDirection');
    }

    /**
     * @param string $scaleDirection
     */
    public function setScaleDirection(string $scaleDirection = null)
    {
        $this->setProperty('scaleDirection', $scaleDirection);
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
}
