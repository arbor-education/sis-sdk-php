<?php

namespace Arbor\Model\Cymru;

use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\Cymru\ResourceType;

class PlascCensusSchoolDetail extends ModelBase
{
    public const DATA_RETURN = 'dataReturn';

    public const FREE_MILK = 'freeMilk';

    public const PAID_MILK = 'paidMilk';

    public const FREE_MEALS = 'freeMeals';

    public const FREE_MEALS_TAKEN_STUDENT_IDS = 'freeMealsTakenStudentIds';

    public const PAID_MEALS = 'paidMeals';

    public const PAID_MEALS_TAKEN_STUDENT_IDS = 'paidMealsTakenStudentIds';

    public const FREE_BREAKFASTS_ALL_STUDENTS = 'freeBreakfastsAllStudents';

    public const FREE_BREAKFASTS_FSM_STUDENTS = 'freeBreakfastsFsmStudents';

    public const FREE_BREAKFASTS_CENSUS_WEEK_ALL_STUDENTS = 'freeBreakfastsCensusWeekAllStudents';

    public const FREE_BREAKFASTS_CENSUS_WEEK_FSM_STUDENTS = 'freeBreakfastsCensusWeekFsmStudents';

    public const HEAD_GOVERNOR = 'headGovernor';

    public const MALE_GOVERNOR = 'maleGovernor';

    public const FEMALE_GOVERNOR = 'femaleGovernor';

    public const WELSH_GOVERNOR = 'welshGovernor';

    public const GOVERNOR_VACANCY = 'governorVacancy';

    public const HEADTEACHER_TEACHING_COMMITMENT = 'headteacherTeachingCommitment';

    public const WELSH_MEDIUM_SUBJECTS_TAUGHT = 'welshMediumSubjectsTaught';

    public const TEACHERS_NOT_TEACHING = 'teachersNotTeaching';

    protected $_resourceType = ResourceType::CYMRU_PLASC_CENSUS_SCHOOL_DETAIL;

    /**
     * @param Query $query
     * @return PlascCensusSchoolDetail[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_PLASC_CENSUS_SCHOOL_DETAIL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PlascCensusSchoolDetail
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_PLASC_CENSUS_SCHOOL_DETAIL, $id);
    }

    /**
     * @return \Arbor\Model\Statutory\DataReturn
     */
    public function getDataReturn()
    {
        return $this->getProperty('dataReturn');
    }

    /**
     * @param \Arbor\Model\Statutory\DataReturn $dataReturn
     */
    public function setDataReturn(\Arbor\Model\Statutory\DataReturn $dataReturn = null)
    {
        $this->setProperty('dataReturn', $dataReturn);
    }

    /**
     * @return int
     */
    public function getFreeMilk()
    {
        return $this->getProperty('freeMilk');
    }

    /**
     * @param int $freeMilk
     */
    public function setFreeMilk(int $freeMilk = null)
    {
        $this->setProperty('freeMilk', $freeMilk);
    }

    /**
     * @return int
     */
    public function getPaidMilk()
    {
        return $this->getProperty('paidMilk');
    }

    /**
     * @param int $paidMilk
     */
    public function setPaidMilk(int $paidMilk = null)
    {
        $this->setProperty('paidMilk', $paidMilk);
    }

    /**
     * @return int
     */
    public function getFreeMeals()
    {
        return $this->getProperty('freeMeals');
    }

    /**
     * @param int $freeMeals
     */
    public function setFreeMeals(int $freeMeals = null)
    {
        $this->setProperty('freeMeals', $freeMeals);
    }

    /**
     * @return string
     */
    public function getFreeMealsTakenStudentIds()
    {
        return $this->getProperty('freeMealsTakenStudentIds');
    }

    /**
     * @param string $freeMealsTakenStudentIds
     */
    public function setFreeMealsTakenStudentIds(string $freeMealsTakenStudentIds = null)
    {
        $this->setProperty('freeMealsTakenStudentIds', $freeMealsTakenStudentIds);
    }

    /**
     * @return int
     */
    public function getPaidMeals()
    {
        return $this->getProperty('paidMeals');
    }

    /**
     * @param int $paidMeals
     */
    public function setPaidMeals(int $paidMeals = null)
    {
        $this->setProperty('paidMeals', $paidMeals);
    }

    /**
     * @return string
     */
    public function getPaidMealsTakenStudentIds()
    {
        return $this->getProperty('paidMealsTakenStudentIds');
    }

    /**
     * @param string $paidMealsTakenStudentIds
     */
    public function setPaidMealsTakenStudentIds(string $paidMealsTakenStudentIds = null)
    {
        $this->setProperty('paidMealsTakenStudentIds', $paidMealsTakenStudentIds);
    }

    /**
     * @return int
     */
    public function getFreeBreakfastsAllStudents()
    {
        return $this->getProperty('freeBreakfastsAllStudents');
    }

    /**
     * @param int $freeBreakfastsAllStudents
     */
    public function setFreeBreakfastsAllStudents(int $freeBreakfastsAllStudents = null)
    {
        $this->setProperty('freeBreakfastsAllStudents', $freeBreakfastsAllStudents);
    }

    /**
     * @return int
     */
    public function getFreeBreakfastsFsmStudents()
    {
        return $this->getProperty('freeBreakfastsFsmStudents');
    }

    /**
     * @param int $freeBreakfastsFsmStudents
     */
    public function setFreeBreakfastsFsmStudents(int $freeBreakfastsFsmStudents = null)
    {
        $this->setProperty('freeBreakfastsFsmStudents', $freeBreakfastsFsmStudents);
    }

    /**
     * @return int
     */
    public function getFreeBreakfastsCensusWeekAllStudents()
    {
        return $this->getProperty('freeBreakfastsCensusWeekAllStudents');
    }

    /**
     * @param int $freeBreakfastsCensusWeekAllStudents
     */
    public function setFreeBreakfastsCensusWeekAllStudents(int $freeBreakfastsCensusWeekAllStudents = null)
    {
        $this->setProperty('freeBreakfastsCensusWeekAllStudents', $freeBreakfastsCensusWeekAllStudents);
    }

    /**
     * @return int
     */
    public function getFreeBreakfastsCensusWeekFsmStudents()
    {
        return $this->getProperty('freeBreakfastsCensusWeekFsmStudents');
    }

    /**
     * @param int $freeBreakfastsCensusWeekFsmStudents
     */
    public function setFreeBreakfastsCensusWeekFsmStudents(int $freeBreakfastsCensusWeekFsmStudents = null)
    {
        $this->setProperty('freeBreakfastsCensusWeekFsmStudents', $freeBreakfastsCensusWeekFsmStudents);
    }

    /**
     * @return int
     */
    public function getHeadGovernor()
    {
        return $this->getProperty('headGovernor');
    }

    /**
     * @param int $headGovernor
     */
    public function setHeadGovernor(int $headGovernor = null)
    {
        $this->setProperty('headGovernor', $headGovernor);
    }

    /**
     * @return int
     */
    public function getMaleGovernor()
    {
        return $this->getProperty('maleGovernor');
    }

    /**
     * @param int $maleGovernor
     */
    public function setMaleGovernor(int $maleGovernor = null)
    {
        $this->setProperty('maleGovernor', $maleGovernor);
    }

    /**
     * @return int
     */
    public function getFemaleGovernor()
    {
        return $this->getProperty('femaleGovernor');
    }

    /**
     * @param int $femaleGovernor
     */
    public function setFemaleGovernor(int $femaleGovernor = null)
    {
        $this->setProperty('femaleGovernor', $femaleGovernor);
    }

    /**
     * @return int
     */
    public function getWelshGovernor()
    {
        return $this->getProperty('welshGovernor');
    }

    /**
     * @param int $welshGovernor
     */
    public function setWelshGovernor(int $welshGovernor = null)
    {
        $this->setProperty('welshGovernor', $welshGovernor);
    }

    /**
     * @return int
     */
    public function getGovernorVacancy()
    {
        return $this->getProperty('governorVacancy');
    }

    /**
     * @param int $governorVacancy
     */
    public function setGovernorVacancy(int $governorVacancy = null)
    {
        $this->setProperty('governorVacancy', $governorVacancy);
    }

    /**
     * @return string
     */
    public function getHeadteacherTeachingCommitment()
    {
        return $this->getProperty('headteacherTeachingCommitment');
    }

    /**
     * @param string $headteacherTeachingCommitment
     */
    public function setHeadteacherTeachingCommitment(string $headteacherTeachingCommitment = null)
    {
        $this->setProperty('headteacherTeachingCommitment', $headteacherTeachingCommitment);
    }

    /**
     * @return int
     */
    public function getWelshMediumSubjectsTaught()
    {
        return $this->getProperty('welshMediumSubjectsTaught');
    }

    /**
     * @param int $welshMediumSubjectsTaught
     */
    public function setWelshMediumSubjectsTaught(int $welshMediumSubjectsTaught = null)
    {
        $this->setProperty('welshMediumSubjectsTaught', $welshMediumSubjectsTaught);
    }

    /**
     * @return int
     */
    public function getTeachersNotTeaching()
    {
        return $this->getProperty('teachersNotTeaching');
    }

    /**
     * @param int $teachersNotTeaching
     */
    public function setTeachersNotTeaching(int $teachersNotTeaching = null)
    {
        $this->setProperty('teachersNotTeaching', $teachersNotTeaching);
    }
}
