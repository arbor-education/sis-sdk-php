<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;

class UciAssignment extends ModelBase
{

    const STUDENT = 'student';

    const UCI = 'uci';

    const ISSUED_YEAR = 'issuedYear';

    const ISSUED_CENTER_NUMBER = 'issuedCenterNumber';

    const ISSUED_AWARDING_ORGANIZATION_IDENTIFIER = 'issuedAwardingOrganizationIdentifier';

    const ISSUED_SERIAL_NUMBER = 'issuedSerialNumber';

    const ISSUED_DATETIME = 'issuedDatetime';

    const CANCELLED_DATETIME = 'cancelledDatetime';

    protected $_resourceType = ResourceType::UK_DFE_UCI_ASSIGNMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return UciAssignment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UkDfe_UciAssignment");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return UciAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::UK_DFE_UCI_ASSIGNMENT, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return string
     */
    public function getUci()
    {
        return $this->getProperty("uci");
    }

    /**
     * @param string $uci
     */
    public function setUci($uci = null)
    {
        $this->setProperty("uci", $uci);
    }

    /**
     * @return int
     */
    public function getIssuedYear()
    {
        return $this->getProperty("issuedYear");
    }

    /**
     * @param int $issuedYear
     */
    public function setIssuedYear($issuedYear = null)
    {
        $this->setProperty("issuedYear", $issuedYear);
    }

    /**
     * @return int
     */
    public function getIssuedCenterNumber()
    {
        return $this->getProperty("issuedCenterNumber");
    }

    /**
     * @param int $issuedCenterNumber
     */
    public function setIssuedCenterNumber($issuedCenterNumber = null)
    {
        $this->setProperty("issuedCenterNumber", $issuedCenterNumber);
    }

    /**
     * @return int
     */
    public function getIssuedAwardingOrganizationIdentifier()
    {
        return $this->getProperty("issuedAwardingOrganizationIdentifier");
    }

    /**
     * @param int $issuedAwardingOrganizationIdentifier
     */
    public function setIssuedAwardingOrganizationIdentifier($issuedAwardingOrganizationIdentifier = null)
    {
        $this->setProperty("issuedAwardingOrganizationIdentifier", $issuedAwardingOrganizationIdentifier);
    }

    /**
     * @return int
     */
    public function getIssuedSerialNumber()
    {
        return $this->getProperty("issuedSerialNumber");
    }

    /**
     * @param int $issuedSerialNumber
     */
    public function setIssuedSerialNumber($issuedSerialNumber = null)
    {
        $this->setProperty("issuedSerialNumber", $issuedSerialNumber);
    }

    /**
     * @return \DateTime
     */
    public function getIssuedDatetime()
    {
        return $this->getProperty("issuedDatetime");
    }

    /**
     * @param \DateTime $issuedDatetime
     */
    public function setIssuedDatetime(\DateTime $issuedDatetime = null)
    {
        $this->setProperty("issuedDatetime", $issuedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCancelledDatetime()
    {
        return $this->getProperty("cancelledDatetime");
    }

    /**
     * @param \DateTime $cancelledDatetime
     */
    public function setCancelledDatetime(\DateTime $cancelledDatetime = null)
    {
        $this->setProperty("cancelledDatetime", $cancelledDatetime);
    }


}
