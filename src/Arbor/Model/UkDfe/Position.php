<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Position extends ModelBase
{
    public const POSITION_CATEGORY = 'positionCategory';

    public const WORKFORCE_VACANCY_POST = 'workforceVacancyPost';

    public const WORKFORCE_CENSUS_ROLE_IDENTIFIER = 'workforceCensusRoleIdentifier';

    protected $_resourceType = ResourceType::UK_DFE_POSITION;

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
     * @return \Arbor\Model\UkDfe\PositionCategory
     */
    public function getPositionCategory()
    {
        return $this->getProperty('positionCategory');
    }

    /**
     * @param \Arbor\Model\UkDfe\PositionCategory $positionCategory
     */
    public function setPositionCategory(\Arbor\Model\UkDfe\PositionCategory $positionCategory = null)
    {
        $this->setProperty('positionCategory', $positionCategory);
    }

    /**
     * @return \Arbor\Model\UkDfe\SchoolWorkforceVacancyPost
     */
    public function getWorkforceVacancyPost()
    {
        return $this->getProperty('workforceVacancyPost');
    }

    /**
     * @param \Arbor\Model\UkDfe\SchoolWorkforceVacancyPost $workforceVacancyPost
     */
    public function setWorkforceVacancyPost(\Arbor\Model\UkDfe\SchoolWorkforceVacancyPost $workforceVacancyPost = null)
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
    public function setWorkforceCensusRoleIdentifier(string $workforceCensusRoleIdentifier = null)
    {
        $this->setProperty('workforceCensusRoleIdentifier', $workforceCensusRoleIdentifier);
    }
}
