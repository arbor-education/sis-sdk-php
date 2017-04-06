<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\UkDfe\QualifiedTeacherRoute;

class Staff extends ModelBase
{

    const ELIGIBLE_FOR_SCHOOL_WORKFORCE_RETURN = 'eligibleForSchoolWorkforceReturn';

    const QUALIFIED_TEACHER_STATUS = 'qualifiedTeacherStatus';

    const QUALIFIED_TEACHER_ROUTE = 'qualifiedTeacherRoute';

    const HLTA_STATUS = 'hltaStatus';

    protected $_resourceType = ResourceType::UK_DFE_STAFF;

    /**
     * @param \Arbor\Query\Query $query
     * @return Staff[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UkDfe_Staff");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Staff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::UK_DFE_STAFF, $id);
    }

    /**
     * @return bool
     */
    public function getEligibleForSchoolWorkforceReturn()
    {
        return $this->getProperty("eligibleForSchoolWorkforceReturn");
    }

    /**
     * @param bool $eligibleForSchoolWorkforceReturn
     */
    public function setEligibleForSchoolWorkforceReturn($eligibleForSchoolWorkforceReturn = null)
    {
        $this->setProperty("eligibleForSchoolWorkforceReturn", $eligibleForSchoolWorkforceReturn);
    }

    /**
     * @return bool
     */
    public function getQualifiedTeacherStatus()
    {
        return $this->getProperty("qualifiedTeacherStatus");
    }

    /**
     * @param bool $qualifiedTeacherStatus
     */
    public function setQualifiedTeacherStatus($qualifiedTeacherStatus = null)
    {
        $this->setProperty("qualifiedTeacherStatus", $qualifiedTeacherStatus);
    }

    /**
     * @return QualifiedTeacherRoute
     */
    public function getQualifiedTeacherRoute()
    {
        return $this->getProperty("qualifiedTeacherRoute");
    }

    /**
     * @param QualifiedTeacherRoute $qualifiedTeacherRoute
     */
    public function setQualifiedTeacherRoute(QualifiedTeacherRoute $qualifiedTeacherRoute = null)
    {
        $this->setProperty("qualifiedTeacherRoute", $qualifiedTeacherRoute);
    }

    /**
     * @return bool
     */
    public function getHltaStatus()
    {
        return $this->getProperty("hltaStatus");
    }

    /**
     * @param bool $hltaStatus
     */
    public function setHltaStatus($hltaStatus = null)
    {
        $this->setProperty("hltaStatus", $hltaStatus);
    }


}
