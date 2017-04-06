<?php
namespace Arbor\Model\Group;

use \Arbor\Resource\Group\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Group\Institution;

class InstitutionPredecessor extends ModelBase
{

    const INSTITUTION = 'institution';

    const PREDECESSOR_INSTITUTION = 'predecessorInstitution';

    const FROM_DATE = 'fromDate';

    protected $_resourceType = ResourceType::GROUP_INSTITUTION_PREDECESSOR;

    /**
     * @param \Arbor\Query\Query $query
     * @return InstitutionPredecessor[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Group_InstitutionPredecessor");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return InstitutionPredecessor
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::GROUP_INSTITUTION_PREDECESSOR, $id);
    }

    /**
     * @return Institution
     */
    public function getInstitution()
    {
        return $this->getProperty("institution");
    }

    /**
     * @param Institution $institution
     */
    public function setInstitution(Institution $institution = null)
    {
        $this->setProperty("institution", $institution);
    }

    /**
     * @return Institution
     */
    public function getPredecessorInstitution()
    {
        return $this->getProperty("predecessorInstitution");
    }

    /**
     * @param Institution $predecessorInstitution
     */
    public function setPredecessorInstitution(Institution $predecessorInstitution = null)
    {
        $this->setProperty("predecessorInstitution", $predecessorInstitution);
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->getProperty("fromDate");
    }

    /**
     * @param \DateTime $fromDate
     */
    public function setFromDate(\DateTime $fromDate = null)
    {
        $this->setProperty("fromDate", $fromDate);
    }


}
