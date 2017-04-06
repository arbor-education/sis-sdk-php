<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\QualificationScheme;
use \Arbor\Model\AwardingOrganization;

class QualificationLearningUnit extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const QUALIFICATION_SCHEME = 'qualificationScheme';

    const AWARDING_ORGANIZATION = 'awardingOrganization';

    const LEARNING_UNIT_IDENTIFIER = 'learningUnitIdentifier';

    const FULL_TITLE = 'fullTitle';

    const SHORT_TITLE = 'shortTitle';

    const DESCRIPTION = 'description';

    protected $_resourceType = ResourceType::QUALIFICATION_LEARNING_UNIT;

    /**
     * @param \Arbor\Query\Query $query
     * @return QualificationLearningUnit[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("QualificationLearningUnit");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return QualificationLearningUnit
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::QUALIFICATION_LEARNING_UNIT, $id);
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
     * @return QualificationScheme
     */
    public function getQualificationScheme()
    {
        return $this->getProperty("qualificationScheme");
    }

    /**
     * @param QualificationScheme $qualificationScheme
     */
    public function setQualificationScheme(QualificationScheme $qualificationScheme = null)
    {
        $this->setProperty("qualificationScheme", $qualificationScheme);
    }

    /**
     * @return AwardingOrganization
     */
    public function getAwardingOrganization()
    {
        return $this->getProperty("awardingOrganization");
    }

    /**
     * @param AwardingOrganization $awardingOrganization
     */
    public function setAwardingOrganization(AwardingOrganization $awardingOrganization = null)
    {
        $this->setProperty("awardingOrganization", $awardingOrganization);
    }

    /**
     * @return string
     */
    public function getLearningUnitIdentifier()
    {
        return $this->getProperty("learningUnitIdentifier");
    }

    /**
     * @param string $learningUnitIdentifier
     */
    public function setLearningUnitIdentifier($learningUnitIdentifier = null)
    {
        $this->setProperty("learningUnitIdentifier", $learningUnitIdentifier);
    }

    /**
     * @return string
     */
    public function getFullTitle()
    {
        return $this->getProperty("fullTitle");
    }

    /**
     * @param string $fullTitle
     */
    public function setFullTitle($fullTitle = null)
    {
        $this->setProperty("fullTitle", $fullTitle);
    }

    /**
     * @return string
     */
    public function getShortTitle()
    {
        return $this->getProperty("shortTitle");
    }

    /**
     * @param string $shortTitle
     */
    public function setShortTitle($shortTitle = null)
    {
        $this->setProperty("shortTitle", $shortTitle);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty("description");
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty("description", $description);
    }


}
