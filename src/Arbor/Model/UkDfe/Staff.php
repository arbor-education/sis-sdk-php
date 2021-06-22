<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Staff extends ModelBase
{

    const ELIGIBLE_FOR_SCHOOL_WORKFORCE_RETURN = 'eligibleForSchoolWorkforceReturn';

    const QUALIFIED_TEACHER_STATUS = 'qualifiedTeacherStatus';

    const QUALIFIED_TEACHER_LEARNING_AND_SKILLS_STATUS = 'qualifiedTeacherLearningAndSkillsStatus';

    const EARLY_YEARS_TEACHER_STATUS = 'earlyYearsTeacherStatus';

    const QUALIFIED_TEACHER_ROUTE = 'qualifiedTeacherRoute';

    const HLTA_STATUS = 'hltaStatus';

    protected $_resourceType = ResourceType::UK_DFE_STAFF;

    /**
     * @param Query $query
     * @return Staff[] | Collection
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
    public function setEligibleForSchoolWorkforceReturn($eligibleForSchoolWorkforceReturn = null)
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
    public function setQualifiedTeacherStatus($qualifiedTeacherStatus = null)
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
    public function setQualifiedTeacherLearningAndSkillsStatus($qualifiedTeacherLearningAndSkillsStatus = null)
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
    public function setEarlyYearsTeacherStatus($earlyYearsTeacherStatus = null)
    {
        $this->setProperty('earlyYearsTeacherStatus', $earlyYearsTeacherStatus);
    }

    /**
     * @return QualifiedTeacherRoute
     */
    public function getQualifiedTeacherRoute()
    {
        return $this->getProperty('qualifiedTeacherRoute');
    }

    /**
     * @param QualifiedTeacherRoute $qualifiedTeacherRoute
     */
    public function setQualifiedTeacherRoute(QualifiedTeacherRoute $qualifiedTeacherRoute = null)
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
    public function setHltaStatus($hltaStatus = null)
    {
        $this->setProperty('hltaStatus', $hltaStatus);
    }


}
