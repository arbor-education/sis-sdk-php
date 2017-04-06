<?php
namespace Arbor\Model\Group;

use \Arbor\Resource\Group\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Kpi;
use \Arbor\Model\AcademicYear;
use \Arbor\Model\Group\Institution;

class KpiInstitutionTarget extends ModelBase
{

    const KPI = 'kpi';

    const ACADEMIC_YEAR = 'academicYear';

    const INSTITUTION = 'institution';

    const TARGET_VALUE = 'targetValue';

    const COMMENT = 'comment';

    protected $_resourceType = ResourceType::GROUP_KPI_INSTITUTION_TARGET;

    /**
     * @param \Arbor\Query\Query $query
     * @return KpiInstitutionTarget[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Group_KpiInstitutionTarget");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return KpiInstitutionTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::GROUP_KPI_INSTITUTION_TARGET, $id);
    }

    /**
     * @return Kpi
     */
    public function getKpi()
    {
        return $this->getProperty("kpi");
    }

    /**
     * @param Kpi $kpi
     */
    public function setKpi(Kpi $kpi = null)
    {
        $this->setProperty("kpi", $kpi);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty("academicYear");
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty("academicYear", $academicYear);
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
     * @return float
     */
    public function getTargetValue()
    {
        return $this->getProperty("targetValue");
    }

    /**
     * @param float $targetValue
     */
    public function setTargetValue($targetValue = null)
    {
        $this->setProperty("targetValue", $targetValue);
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->getProperty("comment");
    }

    /**
     * @param string $comment
     */
    public function setComment($comment = null)
    {
        $this->setProperty("comment", $comment);
    }


}
