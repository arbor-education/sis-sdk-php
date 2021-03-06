<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class House extends ModelBase
{
    const HOUSE_NAME = 'houseName';

    const SHORT_NAME = 'shortName';

    const ACADEMIC_YEAR = 'academicYear';

    const DISPLAY_ORDER = 'displayOrder';

    const COPIED_TO_HOUSE = 'copiedToHouse';

    protected $_resourceType = ResourceType::HOUSE;

    /**
     * @param Query $query
     * @return House[] | Collection
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

        $query->setResourceType(ResourceType::HOUSE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return House
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::HOUSE, $id);
    }

    /**
     * @return string
     */
    public function getHouseName()
    {
        return $this->getProperty('houseName');
    }

    /**
     * @param string $houseName
     */
    public function setHouseName($houseName = null)
    {
        $this->setProperty('houseName', $houseName);
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
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->getProperty('displayOrder');
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder($displayOrder = null)
    {
        $this->setProperty('displayOrder', $displayOrder);
    }

    /**
     * @return House
     */
    public function getCopiedToHouse()
    {
        return $this->getProperty('copiedToHouse');
    }

    /**
     * @param House $copiedToHouse
     */
    public function setCopiedToHouse(House $copiedToHouse = null)
    {
        $this->setProperty('copiedToHouse', $copiedToHouse);
    }
}
