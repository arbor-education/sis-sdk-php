<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class ChildCarePlace extends ModelBase
{
    public const NAME = 'name';

    public const CHILD_CARE_ON_SITE = 'childCareOnSite';

    public const CHILD_CARE_SIGNPOSTING = 'childCareSignposting';

    public const CHILD_CARE_TYPE = 'childCareType';

    public const CHILD_CARE_OPENING_TIME = 'childCareOpeningTime';

    public const CHILD_CARE_CLOSING_TIME = 'childCareClosingTime';

    public const CHILD_CARE_NUMBER_OF_PLACES = 'childCareNumberOfPlaces';

    public const CHILD_CARE_PROVIDER = 'childCareProvider';

    public const CHILD_CARE_OTHER_SCHOOLS = 'childCareOtherSchools';

    public const CHILD_CARE_WEEKS_OPEN = 'childCareWeeksOpen';

    protected $_resourceType = ResourceType::UK_DFE_CHILD_CARE_PLACE;

    /**
     * @param Query $query
     * @return ChildCarePlace[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_CHILD_CARE_PLACE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ChildCarePlace
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_CHILD_CARE_PLACE, $id);
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
     * @return bool
     */
    public function getChildCareOnSite()
    {
        return $this->getProperty('childCareOnSite');
    }

    /**
     * @param bool $childCareOnSite
     */
    public function setChildCareOnSite(bool $childCareOnSite = null)
    {
        $this->setProperty('childCareOnSite', $childCareOnSite);
    }

    /**
     * @return string
     */
    public function getChildCareSignposting()
    {
        return $this->getProperty('childCareSignposting');
    }

    /**
     * @param string $childCareSignposting
     */
    public function setChildCareSignposting(string $childCareSignposting = null)
    {
        $this->setProperty('childCareSignposting', $childCareSignposting);
    }

    /**
     * @return string
     */
    public function getChildCareType()
    {
        return $this->getProperty('childCareType');
    }

    /**
     * @param string $childCareType
     */
    public function setChildCareType(string $childCareType = null)
    {
        $this->setProperty('childCareType', $childCareType);
    }

    /**
     * @return string
     */
    public function getChildCareOpeningTime()
    {
        return $this->getProperty('childCareOpeningTime');
    }

    /**
     * @param string $childCareOpeningTime
     */
    public function setChildCareOpeningTime(string $childCareOpeningTime = null)
    {
        $this->setProperty('childCareOpeningTime', $childCareOpeningTime);
    }

    /**
     * @return string
     */
    public function getChildCareClosingTime()
    {
        return $this->getProperty('childCareClosingTime');
    }

    /**
     * @param string $childCareClosingTime
     */
    public function setChildCareClosingTime(string $childCareClosingTime = null)
    {
        $this->setProperty('childCareClosingTime', $childCareClosingTime);
    }

    /**
     * @return int
     */
    public function getChildCareNumberOfPlaces()
    {
        return $this->getProperty('childCareNumberOfPlaces');
    }

    /**
     * @param int $childCareNumberOfPlaces
     */
    public function setChildCareNumberOfPlaces(int $childCareNumberOfPlaces = null)
    {
        $this->setProperty('childCareNumberOfPlaces', $childCareNumberOfPlaces);
    }

    /**
     * @return string
     */
    public function getChildCareProvider()
    {
        return $this->getProperty('childCareProvider');
    }

    /**
     * @param string $childCareProvider
     */
    public function setChildCareProvider(string $childCareProvider = null)
    {
        $this->setProperty('childCareProvider', $childCareProvider);
    }

    /**
     * @return string
     */
    public function getChildCareOtherSchools()
    {
        return $this->getProperty('childCareOtherSchools');
    }

    /**
     * @param string $childCareOtherSchools
     */
    public function setChildCareOtherSchools(string $childCareOtherSchools = null)
    {
        $this->setProperty('childCareOtherSchools', $childCareOtherSchools);
    }

    /**
     * @return int
     */
    public function getChildCareWeeksOpen()
    {
        return $this->getProperty('childCareWeeksOpen');
    }

    /**
     * @param int $childCareWeeksOpen
     */
    public function setChildCareWeeksOpen(int $childCareWeeksOpen = null)
    {
        $this->setProperty('childCareWeeksOpen', $childCareWeeksOpen);
    }
}
