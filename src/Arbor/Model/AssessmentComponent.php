<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentComponent extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const COMPONENT_TYPE = 'componentType';

    public const NAME = 'name';

    public const SHORT_NAME = 'shortName';

    public const ASSESSMENT_DATA_GRADE_SET = 'assessmentDataGradeSet';

    public const MINIMUM_VALUE = 'minimumValue';

    public const MAXIMUM_VALUE = 'maximumValue';

    public const DECIMAL_PLACES = 'decimalPlaces';

    public const COMMENT_TYPE = 'commentType';

    protected $_resourceType = ResourceType::ASSESSMENT_COMPONENT;

    /**
     * @param Query $query
     * @return AssessmentComponent[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_COMPONENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentComponent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_COMPONENT, $id);
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
    public function getComponentType()
    {
        return $this->getProperty('componentType');
    }

    /**
     * @param string $componentType
     */
    public function setComponentType(string $componentType = null)
    {
        $this->setProperty('componentType', $componentType);
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
     * @return \Arbor\Model\AssessmentDataGradeSet
     */
    public function getAssessmentDataGradeSet()
    {
        return $this->getProperty('assessmentDataGradeSet');
    }

    /**
     * @param \Arbor\Model\AssessmentDataGradeSet $assessmentDataGradeSet
     */
    public function setAssessmentDataGradeSet(\Arbor\Model\AssessmentDataGradeSet $assessmentDataGradeSet = null)
    {
        $this->setProperty('assessmentDataGradeSet', $assessmentDataGradeSet);
    }

    /**
     * @return float
     */
    public function getMinimumValue()
    {
        return $this->getProperty('minimumValue');
    }

    /**
     * @param float $minimumValue
     */
    public function setMinimumValue(float $minimumValue = null)
    {
        $this->setProperty('minimumValue', $minimumValue);
    }

    /**
     * @return float
     */
    public function getMaximumValue()
    {
        return $this->getProperty('maximumValue');
    }

    /**
     * @param float $maximumValue
     */
    public function setMaximumValue(float $maximumValue = null)
    {
        $this->setProperty('maximumValue', $maximumValue);
    }

    /**
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->getProperty('decimalPlaces');
    }

    /**
     * @param int $decimalPlaces
     */
    public function setDecimalPlaces(int $decimalPlaces = null)
    {
        $this->setProperty('decimalPlaces', $decimalPlaces);
    }

    /**
     * @return string
     */
    public function getCommentType()
    {
        return $this->getProperty('commentType');
    }

    /**
     * @param string $commentType
     */
    public function setCommentType(string $commentType = null)
    {
        $this->setProperty('commentType', $commentType);
    }
}
