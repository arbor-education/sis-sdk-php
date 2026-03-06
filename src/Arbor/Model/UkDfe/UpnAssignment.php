<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class UpnAssignment extends ModelBase
{
    public const STUDENT = 'student';

    public const ISSUED_YEAR = 'issuedYear';

    public const ISSUED_LOCAL_AUTHORITY = 'issuedLocalAuthority';

    public const ISSUED_ESTABLISHMENT_NUMBER = 'issuedEstablishmentNumber';

    public const ISSUED_SERIAL_NUMBER = 'issuedSerialNumber';

    public const UPN = 'upn';

    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const IS_TEMPORARY = 'isTemporary';

    protected $_resourceType = ResourceType::UK_DFE_UPN_ASSIGNMENT;

    /**
     * @param Query $query
     * @return UpnAssignment[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_UPN_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UpnAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_UPN_ASSIGNMENT, $id);
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
     * @return string
     */
    public function getIssuedLocalAuthority()
    {
        return $this->getProperty('issuedLocalAuthority');
    }

    /**
     * @param string $issuedLocalAuthority
     */
    public function setIssuedLocalAuthority(string $issuedLocalAuthority = null)
    {
        $this->setProperty('issuedLocalAuthority', $issuedLocalAuthority);
    }

    /**
     * @return string
     */
    public function getIssuedEstablishmentNumber()
    {
        return $this->getProperty('issuedEstablishmentNumber');
    }

    /**
     * @param string $issuedEstablishmentNumber
     */
    public function setIssuedEstablishmentNumber(string $issuedEstablishmentNumber = null)
    {
        $this->setProperty('issuedEstablishmentNumber', $issuedEstablishmentNumber);
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
     * @return string
     */
    public function getUpn()
    {
        return $this->getProperty('upn');
    }

    /**
     * @param string $upn
     */
    public function setUpn(string $upn = null)
    {
        $this->setProperty('upn', $upn);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }

    /**
     * @return bool
     */
    public function getIsTemporary()
    {
        return $this->getProperty('isTemporary');
    }

    /**
     * @param bool $isTemporary
     */
    public function setIsTemporary(bool $isTemporary = null)
    {
        $this->setProperty('isTemporary', $isTemporary);
    }
}
