<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\AcademicYear;

class AcademicUnitEnrolmentImport extends ModelBase
{

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_ENROLMENT_IMPORT;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\AcademicUnitEnrolmentImport[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("AcademicUnitEnrolmentImport");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\AcademicUnitEnrolmentImport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("AcademicUnitEnrolmentImport", $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty("name");
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty("name", $name);
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
     * @return \DateTime
     */
    public function getImportStartedDatetime()
    {
        return $this->getProperty("importStartedDatetime");
    }

    /**
     * @param \DateTime $importStartedDatetime
     */
    public function setImportStartedDatetime(\DateTime $importStartedDatetime = null)
    {
        $this->setProperty("importStartedDatetime", $importStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getImportCompletedDatetime()
    {
        return $this->getProperty("importCompletedDatetime");
    }

    /**
     * @param \DateTime $importCompletedDatetime
     */
    public function setImportCompletedDatetime(\DateTime $importCompletedDatetime = null)
    {
        $this->setProperty("importCompletedDatetime", $importCompletedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEnrolmentStartDate()
    {
        return $this->getProperty("enrolmentStartDate");
    }

    /**
     * @param \DateTime $enrolmentStartDate
     */
    public function setEnrolmentStartDate(\DateTime $enrolmentStartDate = null)
    {
        $this->setProperty("enrolmentStartDate", $enrolmentStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getEnrolmentEndDate()
    {
        return $this->getProperty("enrolmentEndDate");
    }

    /**
     * @param \DateTime $enrolmentEndDate
     */
    public function setEnrolmentEndDate(\DateTime $enrolmentEndDate = null)
    {
        $this->setProperty("enrolmentEndDate", $enrolmentEndDate);
    }


}
