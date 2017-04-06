<?php
namespace Arbor\Model\Group;

use \Arbor\Resource\Group\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Group\Institution;
use \Arbor\Model\UkDfe\OfstedGrade;

class InstitutionOfstedGrade extends ModelBase
{

    const INSTITUTION = 'institution';

    const OFSTED_GRADE = 'ofstedGrade';

    const INSPECTION_DATE = 'inspectionDate';

    protected $_resourceType = ResourceType::GROUP_INSTITUTION_OFSTED_GRADE;

    /**
     * @param \Arbor\Query\Query $query
     * @return InstitutionOfstedGrade[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Group_InstitutionOfstedGrade");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return InstitutionOfstedGrade
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::GROUP_INSTITUTION_OFSTED_GRADE, $id);
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
     * @return OfstedGrade
     */
    public function getOfstedGrade()
    {
        return $this->getProperty("ofstedGrade");
    }

    /**
     * @param OfstedGrade $ofstedGrade
     */
    public function setOfstedGrade(OfstedGrade $ofstedGrade = null)
    {
        $this->setProperty("ofstedGrade", $ofstedGrade);
    }

    /**
     * @return \DateTime
     */
    public function getInspectionDate()
    {
        return $this->getProperty("inspectionDate");
    }

    /**
     * @param \DateTime $inspectionDate
     */
    public function setInspectionDate(\DateTime $inspectionDate = null)
    {
        $this->setProperty("inspectionDate", $inspectionDate);
    }


}
