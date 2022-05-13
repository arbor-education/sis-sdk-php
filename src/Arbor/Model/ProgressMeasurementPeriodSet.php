<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProgressMeasurementPeriodSet extends ModelBase
{
    const PERIOD_FREQUENCY = 'periodFrequency';

    const SET_NAME = 'setName';

    const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::PROGRESS_MEASUREMENT_PERIOD_SET;

    /**
     * @param Query $query
     * @return ProgressMeasurementPeriodSet[] | Collection
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

        $query->setResourceType(ResourceType::PROGRESS_MEASUREMENT_PERIOD_SET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgressMeasurementPeriodSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROGRESS_MEASUREMENT_PERIOD_SET, $id);
    }

    /**
     * @return string
     */
    public function getPeriodFrequency()
    {
        return $this->getProperty('periodFrequency');
    }

    /**
     * @param string $periodFrequency
     */
    public function setPeriodFrequency($periodFrequency = null)
    {
        $this->setProperty('periodFrequency', $periodFrequency);
    }

    /**
     * @return string
     */
    public function getSetName()
    {
        return $this->getProperty('setName');
    }

    /**
     * @param string $setName
     */
    public function setSetName($setName = null)
    {
        $this->setProperty('setName', $setName);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

}
