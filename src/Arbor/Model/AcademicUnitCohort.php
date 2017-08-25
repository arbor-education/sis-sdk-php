<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicUnitCohort extends ModelBase
{
    const COHORT_NAME = 'cohortName';

    const COHORT_CODE = 'cohortCode';

    const ACADEMIC_UNIT = 'academicUnit';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_COHORT;

    /**
     * @param Query $query
     * @return AcademicUnitCohort[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_UNIT_COHORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnitCohort
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT_COHORT, $id);
    }

    /**
     * @return string
     */
    public function getCohortName()
    {
        return $this->getProperty('cohortName');
    }

    /**
     * @param string $cohortName
     */
    public function setCohortName($cohortName = null)
    {
        $this->setProperty('cohortName', $cohortName);
    }

    /**
     * @return string
     */
    public function getCohortCode()
    {
        return $this->getProperty('cohortCode');
    }

    /**
     * @param string $cohortCode
     */
    public function setCohortCode($cohortCode = null)
    {
        $this->setProperty('cohortCode', $cohortCode);
    }

    /**
     * @return AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param AcademicUnit $academicUnit
     */
    public function setAcademicUnit(AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
    }
}
