<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InternalExclusion extends ModelBase
{
    public const STUDENT = 'student';

    public const ISSUED_BY_STAFF = 'issuedByStaff';

    public const INTERNAL_EXCLUSION_SESSION = 'internalExclusionSession';

    public const INTERNAL_EXCLUSION_TYPE = 'internalExclusionType';

    public const EXCLUSION_REASON = 'exclusionReason';

    public const INTERNAL_EXCLUSION_REASON = 'internalExclusionReason';

    public const ISSUED_DATETIME = 'issuedDatetime';

    public const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::INTERNAL_EXCLUSION;

    /**
     * @param Query $query
     * @return InternalExclusion[] | Collection
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

        $query->setResourceType(ResourceType::INTERNAL_EXCLUSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InternalExclusion
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERNAL_EXCLUSION, $id);
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
     * @return \Arbor\Model\Staff
     */
    public function getIssuedByStaff()
    {
        return $this->getProperty('issuedByStaff');
    }

    /**
     * @param \Arbor\Model\Staff $issuedByStaff
     */
    public function setIssuedByStaff(\Arbor\Model\Staff $issuedByStaff = null)
    {
        $this->setProperty('issuedByStaff', $issuedByStaff);
    }

    /**
     * @return \Arbor\Model\InternalExclusionSession
     */
    public function getInternalExclusionSession()
    {
        return $this->getProperty('internalExclusionSession');
    }

    /**
     * @param \Arbor\Model\InternalExclusionSession $internalExclusionSession
     */
    public function setInternalExclusionSession(\Arbor\Model\InternalExclusionSession $internalExclusionSession = null)
    {
        $this->setProperty('internalExclusionSession', $internalExclusionSession);
    }

    /**
     * @return \Arbor\Model\InternalExclusionType
     */
    public function getInternalExclusionType()
    {
        return $this->getProperty('internalExclusionType');
    }

    /**
     * @param \Arbor\Model\InternalExclusionType $internalExclusionType
     */
    public function setInternalExclusionType(\Arbor\Model\InternalExclusionType $internalExclusionType = null)
    {
        $this->setProperty('internalExclusionType', $internalExclusionType);
    }

    /**
     * @return \Arbor\Model\ExclusionReason
     */
    public function getExclusionReason()
    {
        return $this->getProperty('exclusionReason');
    }

    /**
     * @param \Arbor\Model\ExclusionReason $exclusionReason
     */
    public function setExclusionReason(\Arbor\Model\ExclusionReason $exclusionReason = null)
    {
        $this->setProperty('exclusionReason', $exclusionReason);
    }

    /**
     * @return \Arbor\Model\InternalExclusionReason
     */
    public function getInternalExclusionReason()
    {
        return $this->getProperty('internalExclusionReason');
    }

    /**
     * @param \Arbor\Model\InternalExclusionReason $internalExclusionReason
     */
    public function setInternalExclusionReason(\Arbor\Model\InternalExclusionReason $internalExclusionReason = null)
    {
        $this->setProperty('internalExclusionReason', $internalExclusionReason);
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
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative(string $narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }
}
