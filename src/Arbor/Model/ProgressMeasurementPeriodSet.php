<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;

class ProgressMeasurementPeriodSet extends ModelBase
{

    const PERIOD_FREQUENCY = 'periodFrequency';

    const SET_NAME = 'setName';

    const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::PROGRESS_MEASUREMENT_PERIOD_SET;

    /**
     * @param \Arbor\Query\Query $query
     * @return ProgressMeasurementPeriodSet[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("ProgressMeasurementPeriodSet");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ProgressMeasurementPeriodSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::PROGRESS_MEASUREMENT_PERIOD_SET, $id);
    }

    /**
     * @return string
     */
    public function getPeriodFrequency()
    {
        return $this->getProperty("periodFrequency");
    }

    /**
     * @param string $periodFrequency
     */
    public function setPeriodFrequency($periodFrequency = null)
    {
        $this->setProperty("periodFrequency", $periodFrequency);
    }

    /**
     * @return string
     */
    public function getSetName()
    {
        return $this->getProperty("setName");
    }

    /**
     * @param string $setName
     */
    public function setSetName($setName = null)
    {
        $this->setProperty("setName", $setName);
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


}
