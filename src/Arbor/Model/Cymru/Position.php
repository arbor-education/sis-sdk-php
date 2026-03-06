<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Position extends ModelBase
{
    public const POSITION_CATEGORY = 'positionCategory';

    public const SCHOOL_WORKFORCE_CENSUS_BUSINESS_ROLE = 'schoolWorkforceCensusBusinessRole';

    protected $_resourceType = ResourceType::CYMRU_POSITION;

    /**
     * @param Query $query
     * @return Position[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_POSITION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Position
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_POSITION, $id);
    }

    /**
     * @return \Arbor\Model\Cymru\PositionCategory
     */
    public function getPositionCategory()
    {
        return $this->getProperty('positionCategory');
    }

    /**
     * @param \Arbor\Model\Cymru\PositionCategory $positionCategory
     */
    public function setPositionCategory(\Arbor\Model\Cymru\PositionCategory $positionCategory = null)
    {
        $this->setProperty('positionCategory', $positionCategory);
    }

    /**
     * @return \Arbor\Model\Cymru\SchoolWorkforceCensusBusinessRole
     */
    public function getSchoolWorkforceCensusBusinessRole()
    {
        return $this->getProperty('schoolWorkforceCensusBusinessRole');
    }

    /**
     * @param \Arbor\Model\Cymru\SchoolWorkforceCensusBusinessRole
     * $schoolWorkforceCensusBusinessRole
     */
    public function setSchoolWorkforceCensusBusinessRole(\Arbor\Model\Cymru\SchoolWorkforceCensusBusinessRole $schoolWorkforceCensusBusinessRole = null)
    {
        $this->setProperty('schoolWorkforceCensusBusinessRole', $schoolWorkforceCensusBusinessRole);
    }
}
