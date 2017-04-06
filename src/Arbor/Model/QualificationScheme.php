<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AwardingOrganization;

class QualificationScheme extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const AWARDING_ORGANIZATION = 'awardingOrganization';

    const SCHEME_IDENTIFIER = 'schemeIdentifier';

    const FULL_TITLE = 'fullTitle';

    const SHORT_TITLE = 'shortTitle';

    const DESCRIPTION = 'description';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::QUALIFICATION_SCHEME;

    /**
     * @param \Arbor\Query\Query $query
     * @return QualificationScheme[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("QualificationScheme");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return QualificationScheme
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::QUALIFICATION_SCHEME, $id);
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
    public function getSchemeIdentifier()
    {
        return $this->getProperty("schemeIdentifier");
    }

    /**
     * @param string $schemeIdentifier
     */
    public function setSchemeIdentifier($schemeIdentifier = null)
    {
        $this->setProperty("schemeIdentifier", $schemeIdentifier);
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

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }


}
