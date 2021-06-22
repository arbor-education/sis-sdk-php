<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentMarkNonSubmissionReason extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const NAME = 'name';

    const SHORT_NAME = 'shortName';

    const ASSESSMENT_TYPE = 'assessmentType';

    protected $_resourceType = ResourceType::ASSESSMENT_MARK_NON_SUBMISSION_REASON;

    /**
     * @param Query $query
     * @return AssessmentMarkNonSubmissionReason[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_MARK_NON_SUBMISSION_REASON);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentMarkNonSubmissionReason
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_MARK_NON_SUBMISSION_REASON, $id);
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
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
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
    public function setShortName($shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return string
     */
    public function getAssessmentType()
    {
        return $this->getProperty('assessmentType');
    }

    /**
     * @param string $assessmentType
     */
    public function setAssessmentType($assessmentType = null)
    {
        $this->setProperty('assessmentType', $assessmentType);
    }


}
