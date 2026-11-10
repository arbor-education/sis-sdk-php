<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentLookup extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const NAME = 'name';

    public const SHORT_NAME = 'shortName';

    public const LOOKUP_TYPE = 'lookupType';

    public const ASSESSMENT_DATA_GRADE_SET = 'assessmentDataGradeSet';

    protected $_resourceType = ResourceType::ASSESSMENT_LOOKUP;

    /**
     * @param Query $query
     * @return AssessmentLookup[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_LOOKUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentLookup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_LOOKUP, $id);
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
     * @return string
     */
    public function getLookupType()
    {
        return $this->getProperty('lookupType');
    }

    /**
     * @param string $lookupType
     */
    public function setLookupType(string $lookupType = null)
    {
        $this->setProperty('lookupType', $lookupType);
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
}
