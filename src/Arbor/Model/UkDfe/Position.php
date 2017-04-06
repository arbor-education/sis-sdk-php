<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\UkDfe\PositionCategory;
use \Arbor\Model\UkDfe\SchoolWorkforceVacancyPost;

class Position extends ModelBase
{

    const POSITION_CATEGORY = 'positionCategory';

    const WORKFORCE_VACANCY_POST = 'workforceVacancyPost';

    protected $_resourceType = ResourceType::UK_DFE_POSITION;

    /**
     * @param \Arbor\Query\Query $query
     * @return Position[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UkDfe_Position");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Position
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::UK_DFE_POSITION, $id);
    }

    /**
     * @return PositionCategory
     */
    public function getPositionCategory()
    {
        return $this->getProperty("positionCategory");
    }

    /**
     * @param PositionCategory $positionCategory
     */
    public function setPositionCategory(PositionCategory $positionCategory = null)
    {
        $this->setProperty("positionCategory", $positionCategory);
    }

    /**
     * @return SchoolWorkforceVacancyPost
     */
    public function getWorkforceVacancyPost()
    {
        return $this->getProperty("workforceVacancyPost");
    }

    /**
     * @param SchoolWorkforceVacancyPost $workforceVacancyPost
     */
    public function setWorkforceVacancyPost(SchoolWorkforceVacancyPost $workforceVacancyPost = null)
    {
        $this->setProperty("workforceVacancyPost", $workforceVacancyPost);
    }


}
