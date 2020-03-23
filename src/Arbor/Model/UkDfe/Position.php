<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Position extends ModelBase
{

    const POSITION_CATEGORY = 'positionCategory';

    const WORKFORCE_VACANCY_POST = 'workforceVacancyPost';

    const WORKFORCE_CENSUS_ROLE_IDENTIFIER = 'workforceCensusRoleIdentifier';

    protected $_resourceType = ResourceType::UK_DFE_POSITION;

    /**
     * @param Query $query
     * @return Position[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_POSITION);

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

        return $gateway->retrieve(ResourceType::UK_DFE_POSITION, $id);
    }

    /**
     * @return PositionCategory
     */
    public function getPositionCategory()
    {
        return $this->getProperty('positionCategory');
    }

    /**
     * @param PositionCategory $positionCategory
     */
    public function setPositionCategory(PositionCategory $positionCategory = null)
    {
        $this->setProperty('positionCategory', $positionCategory);
    }

    /**
     * @return SchoolWorkforceVacancyPost
     */
    public function getWorkforceVacancyPost()
    {
        return $this->getProperty('workforceVacancyPost');
    }

    /**
     * @param SchoolWorkforceVacancyPost $workforceVacancyPost
     */
    public function setWorkforceVacancyPost(SchoolWorkforceVacancyPost $workforceVacancyPost = null)
    {
        $this->setProperty('workforceVacancyPost', $workforceVacancyPost);
    }

    /**
     * @return string
     */
    public function getWorkforceCensusRoleIdentifier()
    {
        return $this->getProperty('workforceCensusRoleIdentifier');
    }

    /**
     * @param string $workforceCensusRoleIdentifier
     */
    public function setWorkforceCensusRoleIdentifier($workforceCensusRoleIdentifier = null)
    {
        $this->setProperty('workforceCensusRoleIdentifier', $workforceCensusRoleIdentifier);
    }


}
