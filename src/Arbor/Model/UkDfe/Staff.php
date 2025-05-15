<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Staff extends ModelBase
{
    public const ELIGIBLE_FOR_SCHOOL_WORKFORCE_RETURN = 'eligibleForSchoolWorkforceReturn';

    public const QUALIFIED_TEACHER_STATUS = 'qualifiedTeacherStatus';

    public const QUALIFIED_TEACHER_LEARNING_AND_SKILLS_STATUS = 'qualifiedTeacherLearningAndSkillsStatus';

    public const EARLY_YEARS_TEACHER_STATUS = 'earlyYearsTeacherStatus';

    public const QUALIFIED_TEACHER_ROUTE = 'qualifiedTeacherRoute';

    public const HLTA_STATUS = 'hltaStatus';

    public const NEWLY_QUALIFIED_TEACHER_DATE = 'newlyQualifiedTeacherDate';

    public const SLT_STATUS_FOR_SWC = 'sltStatusForSwc';

    protected $_resourceType = ResourceType::UK_DFE_STAFF;

    /**
     * @param Query $query
     * @return Staff[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_STAFF);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Staff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_STAFF, $id);
    }

    /**
     * @return bool
     */
    public function getEligibleForSchoolWorkforceReturn()
    {
        return $this->getProperty('eligibleForSchoolWorkforceReturn');
    }

    /**
     * @param bool $eligibleForSchoolWorkforceReturn
     */
    public function setEligibleForSchoolWorkforceReturn(bool $eligibleForSchoolWorkforceReturn = null)
    {
        $this->setProperty('eligibleForSchoolWorkforceReturn', $eligibleForSchoolWorkforceReturn);
    }

    /**
     * @return bool
     */
    public function getQualifiedTeacherStatus()
    {
        return $this->getProperty('qualifiedTeacherStatus');
    }

    /**
     * @param bool $qualifiedTeacherStatus
     */
    public function setQualifiedTeacherStatus(bool $qualifiedTeacherStatus = null)
    {
        $this->setProperty('qualifiedTeacherStatus', $qualifiedTeacherStatus);
    }

    /**
     * @return bool
     */
    public function getQualifiedTeacherLearningAndSkillsStatus()
    {
        return $this->getProperty('qualifiedTeacherLearningAndSkillsStatus');
    }

    /**
     * @param bool $qualifiedTeacherLearningAndSkillsStatus
     */
    public function setQualifiedTeacherLearningAndSkillsStatus(bool $qualifiedTeacherLearningAndSkillsStatus = null)
    {
        $this->setProperty('qualifiedTeacherLearningAndSkillsStatus', $qualifiedTeacherLearningAndSkillsStatus);
    }

    /**
     * @return bool
     */
    public function getEarlyYearsTeacherStatus()
    {
        return $this->getProperty('earlyYearsTeacherStatus');
    }

    /**
     * @param bool $earlyYearsTeacherStatus
     */
    public function setEarlyYearsTeacherStatus(bool $earlyYearsTeacherStatus = null)
    {
        $this->setProperty('earlyYearsTeacherStatus', $earlyYearsTeacherStatus);
    }

    /**
     * @return \Arbor\Model\UkDfe\QualifiedTeacherRoute
     */
    public function getQualifiedTeacherRoute()
    {
        return $this->getProperty('qualifiedTeacherRoute');
    }

    /**
     * @param \Arbor\Model\UkDfe\QualifiedTeacherRoute $qualifiedTeacherRoute
     */
    public function setQualifiedTeacherRoute(\Arbor\Model\UkDfe\QualifiedTeacherRoute $qualifiedTeacherRoute = null)
    {
        $this->setProperty('qualifiedTeacherRoute', $qualifiedTeacherRoute);
    }

    /**
     * @return bool
     */
    public function getHltaStatus()
    {
        return $this->getProperty('hltaStatus');
    }

    /**
     * @param bool $hltaStatus
     */
    public function setHltaStatus(bool $hltaStatus = null)
    {
        $this->setProperty('hltaStatus', $hltaStatus);
    }

    /**
     * @return \DateTime
     */
    public function getNewlyQualifiedTeacherDate()
    {
        return $this->getProperty('newlyQualifiedTeacherDate');
    }

    /**
     * @param \DateTime $newlyQualifiedTeacherDate
     */
    public function setNewlyQualifiedTeacherDate(\DateTime $newlyQualifiedTeacherDate = null)
    {
        $this->setProperty('newlyQualifiedTeacherDate', $newlyQualifiedTeacherDate);
    }

    /**
     * @return string
     */
    public function getSltStatusForSwc()
    {
        return $this->getProperty('sltStatusForSwc');
    }

    /**
     * @param string $sltStatusForSwc
     */
    public function setSltStatusForSwc(string $sltStatusForSwc = null)
    {
        $this->setProperty('sltStatusForSwc', $sltStatusForSwc);
    }
}
