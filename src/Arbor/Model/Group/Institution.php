<?php
namespace Arbor\Model\Group;

use Arbor\Resource\Group\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Country;
use Arbor\Model\Region;
use Arbor\Model\LocalAuthority;

class Institution extends ModelBase
{

    const NAME = 'name';

    const SHORT_NAME = 'shortName';

    const ABBREVIATED_NAME = 'abbreviatedName';

    const OPENING_DATE = 'openingDate';

    const CLOSING_DATE = 'closingDate';

    const COUNTRY = 'country';

    const REGION = 'region';

    const LOCAL_AUTHORITY = 'localAuthority';

    const OPERATOR = 'operator';

    const BASE_URL = 'baseUrl';

    const APPLICATION_ID = 'applicationId';

    const ASSIGNED_FROM_DATE = 'assignedFromDate';

    const ASSIGNED_TO_DATE = 'assignedToDate';

    const ARBOR_IDENTIFIER = 'arborIdentifier';

    protected $_resourceType = ResourceType::GROUP_INSTITUTION;

    /**
     * @param Query $query
     * @return Institution[] | Collection
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

        $query->setResourceType(ResourceType::GROUP_INSTITUTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Institution
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GROUP_INSTITUTION, $id);
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
    public function getAbbreviatedName()
    {
        return $this->getProperty('abbreviatedName');
    }

    /**
     * @param string $abbreviatedName
     */
    public function setAbbreviatedName($abbreviatedName = null)
    {
        $this->setProperty('abbreviatedName', $abbreviatedName);
    }

    /**
     * @return \DateTime
     */
    public function getOpeningDate()
    {
        return $this->getProperty('openingDate');
    }

    /**
     * @param \DateTime $openingDate
     */
    public function setOpeningDate(\DateTime $openingDate = null)
    {
        $this->setProperty('openingDate', $openingDate);
    }

    /**
     * @return \DateTime
     */
    public function getClosingDate()
    {
        return $this->getProperty('closingDate');
    }

    /**
     * @param \DateTime $closingDate
     */
    public function setClosingDate(\DateTime $closingDate = null)
    {
        $this->setProperty('closingDate', $closingDate);
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->getProperty('country');
    }

    /**
     * @param Country $country
     */
    public function setCountry(Country $country = null)
    {
        $this->setProperty('country', $country);
    }

    /**
     * @return Region
     */
    public function getRegion()
    {
        return $this->getProperty('region');
    }

    /**
     * @param Region $region
     */
    public function setRegion(Region $region = null)
    {
        $this->setProperty('region', $region);
    }

    /**
     * @return LocalAuthority
     */
    public function getLocalAuthority()
    {
        return $this->getProperty('localAuthority');
    }

    /**
     * @param LocalAuthority $localAuthority
     */
    public function setLocalAuthority(LocalAuthority $localAuthority = null)
    {
        $this->setProperty('localAuthority', $localAuthority);
    }

    /**
     * @return Operator
     */
    public function getOperator()
    {
        return $this->getProperty('operator');
    }

    /**
     * @param Operator $operator
     */
    public function setOperator(Operator $operator = null)
    {
        $this->setProperty('operator', $operator);
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->getProperty('baseUrl');
    }

    /**
     * @param string $baseUrl
     */
    public function setBaseUrl($baseUrl = null)
    {
        $this->setProperty('baseUrl', $baseUrl);
    }

    /**
     * @return string
     */
    public function getApplicationId()
    {
        return $this->getProperty('applicationId');
    }

    /**
     * @param string $applicationId
     */
    public function setApplicationId($applicationId = null)
    {
        $this->setProperty('applicationId', $applicationId);
    }

    /**
     * @return \DateTime
     */
    public function getAssignedFromDate()
    {
        return $this->getProperty('assignedFromDate');
    }

    /**
     * @param \DateTime $assignedFromDate
     */
    public function setAssignedFromDate(\DateTime $assignedFromDate = null)
    {
        $this->setProperty('assignedFromDate', $assignedFromDate);
    }

    /**
     * @return \DateTime
     */
    public function getAssignedToDate()
    {
        return $this->getProperty('assignedToDate');
    }

    /**
     * @param \DateTime $assignedToDate
     */
    public function setAssignedToDate(\DateTime $assignedToDate = null)
    {
        $this->setProperty('assignedToDate', $assignedToDate);
    }

    /**
     * @return string
     */
    public function getArborIdentifier()
    {
        return $this->getProperty('arborIdentifier');
    }

    /**
     * @param string $arborIdentifier
     */
    public function setArborIdentifier($arborIdentifier = null)
    {
        $this->setProperty('arborIdentifier', $arborIdentifier);
    }


}
