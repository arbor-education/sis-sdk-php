<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class House extends ModelBase
{
    public const HOUSE_NAME = 'houseName';

    public const SHORT_NAME = 'shortName';

    public const ACADEMIC_YEAR = 'academicYear';

    public const DISPLAY_ORDER = 'displayOrder';

    public const COPIED_TO_HOUSE = 'copiedToHouse';

    protected $_resourceType = ResourceType::HOUSE;

    /**
     * @param Query $query
     * @return House[] | Collection
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
    public function setHouseName(string $houseName = null)
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
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
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
    public function setDisplayOrder(int $displayOrder = null)
    {
        $this->setProperty('displayOrder', $displayOrder);
    }

    /**
     * @return \Arbor\Model\House
     */
    public function getCopiedToHouse()
    {
        return $this->getProperty('copiedToHouse');
    }

    /**
     * @param \Arbor\Model\House $copiedToHouse
     */
    public function setCopiedToHouse(\Arbor\Model\House $copiedToHouse = null)
    {
        $this->setProperty('copiedToHouse', $copiedToHouse);
    }
}
