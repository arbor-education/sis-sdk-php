<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationAssessable extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const ASSESSABLE_IDENTIFIER = 'assessableIdentifier';

    const AWARDING_ORGANIZATION = 'awardingOrganization';

    const TITLE = 'title';

    const ASSESSMENT_METHOD_TYPE = 'assessmentMethodType';

    const CENTER_ASSESSED = 'centerAssessed';

    protected $_resourceType = ResourceType::QUALIFICATION_ASSESSABLE;

    /**
     * @param Query $query
     * @return QualificationAssessable[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_ASSESSABLE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationAssessable
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_ASSESSABLE, $id);
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
    public function getAssessableIdentifier()
    {
        return $this->getProperty('assessableIdentifier');
    }

    /**
     * @param string $assessableIdentifier
     */
    public function setAssessableIdentifier($assessableIdentifier = null)
    {
        $this->setProperty('assessableIdentifier', $assessableIdentifier);
    }

    /**
     * @return AwardingOrganization
     */
    public function getAwardingOrganization()
    {
        return $this->getProperty('awardingOrganization');
    }

    /**
     * @param AwardingOrganization $awardingOrganization
     */
    public function setAwardingOrganization(AwardingOrganization $awardingOrganization = null)
    {
        $this->setProperty('awardingOrganization', $awardingOrganization);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param string $title
     */
    public function setTitle($title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return string
     */
    public function getAssessmentMethodType()
    {
        return $this->getProperty('assessmentMethodType');
    }

    /**
     * @param string $assessmentMethodType
     */
    public function setAssessmentMethodType($assessmentMethodType = null)
    {
        $this->setProperty('assessmentMethodType', $assessmentMethodType);
    }

    /**
     * @return bool
     */
    public function getCenterAssessed()
    {
        return $this->getProperty('centerAssessed');
    }

    /**
     * @param bool $centerAssessed
     */
    public function setCenterAssessed($centerAssessed = null)
    {
        $this->setProperty('centerAssessed', $centerAssessed);
    }
}
