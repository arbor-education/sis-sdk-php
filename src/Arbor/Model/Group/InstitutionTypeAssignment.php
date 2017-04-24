<?php
namespace Arbor\Model\Group;

use \Arbor\Resource\Group\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Group\Institution;
use \Arbor\Model\InstitutionType;

class InstitutionTypeAssignment extends ModelBase
{
    const INSTITUTION = 'institution';

    const INSTITUTION_TYPE = 'institutionType';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::GROUP_INSTITUTION_TYPE_ASSIGNMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return InstitutionTypeAssignment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Group_InstitutionTypeAssignment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return InstitutionTypeAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GROUP_INSTITUTION_TYPE_ASSIGNMENT, $id);
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
     * @return InstitutionType
     */
    public function getInstitutionType()
    {
        return $this->getProperty("institutionType");
    }

    /**
     * @param InstitutionType $institutionType
     */
    public function setInstitutionType(InstitutionType $institutionType = null)
    {
        $this->setProperty("institutionType", $institutionType);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
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
