<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class UciAssignment extends ModelBase
{
    public const STUDENT = 'student';

    public const UCI = 'uci';

    public const ISSUED_YEAR = 'issuedYear';

    public const ISSUED_CENTER_NUMBER = 'issuedCenterNumber';

    public const ISSUED_AWARDING_ORGANIZATION_IDENTIFIER = 'issuedAwardingOrganizationIdentifier';

    public const ISSUED_SERIAL_NUMBER = 'issuedSerialNumber';

    public const ISSUED_DATETIME = 'issuedDatetime';

    public const CANCELLED_DATETIME = 'cancelledDatetime';

    protected $_resourceType = ResourceType::CYMRU_UCI_ASSIGNMENT;

    /**
     * @param Query $query
     * @return UciAssignment[] | Collection
     * @throws Exception
     */
    public static function query(\Arbor\Query\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::CYMRU_UCI_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UciAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_UCI_ASSIGNMENT, $id);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return string
     */
    public function getUci()
    {
        return $this->getProperty('uci');
    }

    /**
     * @param string $uci
     */
    public function setUci(string $uci = null)
    {
        $this->setProperty('uci', $uci);
    }

    /**
     * @return int
     */
    public function getIssuedYear()
    {
        return $this->getProperty('issuedYear');
    }

    /**
     * @param int $issuedYear
     */
    public function setIssuedYear(int $issuedYear = null)
    {
        $this->setProperty('issuedYear', $issuedYear);
    }

    /**
     * @return int
     */
    public function getIssuedCenterNumber()
    {
        return $this->getProperty('issuedCenterNumber');
    }

    /**
     * @param int $issuedCenterNumber
     */
    public function setIssuedCenterNumber(int $issuedCenterNumber = null)
    {
        $this->setProperty('issuedCenterNumber', $issuedCenterNumber);
    }

    /**
     * @return int
     */
    public function getIssuedAwardingOrganizationIdentifier()
    {
        return $this->getProperty('issuedAwardingOrganizationIdentifier');
    }

    /**
     * @param int $issuedAwardingOrganizationIdentifier
     */
    public function setIssuedAwardingOrganizationIdentifier(int $issuedAwardingOrganizationIdentifier = null)
    {
        $this->setProperty('issuedAwardingOrganizationIdentifier', $issuedAwardingOrganizationIdentifier);
    }

    /**
     * @return int
     */
    public function getIssuedSerialNumber()
    {
        return $this->getProperty('issuedSerialNumber');
    }

    /**
     * @param int $issuedSerialNumber
     */
    public function setIssuedSerialNumber(int $issuedSerialNumber = null)
    {
        $this->setProperty('issuedSerialNumber', $issuedSerialNumber);
    }

    /**
     * @return \DateTime
     */
    public function getIssuedDatetime()
    {
        return $this->getProperty('issuedDatetime');
    }

    /**
     * @param \DateTime $issuedDatetime
     */
    public function setIssuedDatetime(\DateTime $issuedDatetime = null)
    {
        $this->setProperty('issuedDatetime', $issuedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCancelledDatetime()
    {
        return $this->getProperty('cancelledDatetime');
    }

    /**
     * @param \DateTime $cancelledDatetime
     */
    public function setCancelledDatetime(\DateTime $cancelledDatetime = null)
    {
        $this->setProperty('cancelledDatetime', $cancelledDatetime);
    }
}
