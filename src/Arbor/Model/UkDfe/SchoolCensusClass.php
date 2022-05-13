<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Session;

class SchoolCensusClass extends ModelBase
{
    const SCHOOL_CENSUS = 'schoolCensus';

    const SESSION = 'session';

    const TEACHERS = 'teachers';

    const NON_TEACHERS = 'nonTeachers';

    const PPA_TEACHERS = 'ppaTeachers';

    const ASC_ACTIVITY = 'ascActivity';

    const HOME_PUPILS = 'homePupils';

    const GUEST_PUPILS = 'guestPupils';

    const INFANT_PUPIL_EXCEPTIONS = 'infantPupilExceptions';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_CENSUS_CLASS;

    /**
     * @param Query $query
     * @return SchoolCensusClass[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_SCHOOL_CENSUS_CLASS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolCensusClass
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_SCHOOL_CENSUS_CLASS, $id);
    }

    /**
     * @return SchoolCensus
     */
    public function getSchoolCensus()
    {
        return $this->getProperty('schoolCensus');
    }

    /**
     * @param SchoolCensus $schoolCensus
     */
    public function setSchoolCensus(SchoolCensus $schoolCensus = null)
    {
        $this->setProperty('schoolCensus', $schoolCensus);
    }

    /**
     * @return Session
     */
    public function getSession()
    {
        return $this->getProperty('session');
    }

    /**
     * @param Session $session
     */
    public function setSession(Session $session = null)
    {
        $this->setProperty('session', $session);
    }

    /**
     * @return int
     */
    public function getTeachers()
    {
        return $this->getProperty('teachers');
    }

    /**
     * @param int $teachers
     */
    public function setTeachers($teachers = null)
    {
        $this->setProperty('teachers', $teachers);
    }

    /**
     * @return int
     */
    public function getNonTeachers()
    {
        return $this->getProperty('nonTeachers');
    }

    /**
     * @param int $nonTeachers
     */
    public function setNonTeachers($nonTeachers = null)
    {
        $this->setProperty('nonTeachers', $nonTeachers);
    }

    /**
     * @return int
     */
    public function getPpaTeachers()
    {
        return $this->getProperty('ppaTeachers');
    }

    /**
     * @param int $ppaTeachers
     */
    public function setPpaTeachers($ppaTeachers = null)
    {
        $this->setProperty('ppaTeachers', $ppaTeachers);
    }

    /**
     * @return string
     */
    public function getAscActivity()
    {
        return $this->getProperty('ascActivity');
    }

    /**
     * @param string $ascActivity
     */
    public function setAscActivity($ascActivity = null)
    {
        $this->setProperty('ascActivity', $ascActivity);
    }

    /**
     * @return int
     */
    public function getHomePupils()
    {
        return $this->getProperty('homePupils');
    }

    /**
     * @param int $homePupils
     */
    public function setHomePupils($homePupils = null)
    {
        $this->setProperty('homePupils', $homePupils);
    }

    /**
     * @return int
     */
    public function getGuestPupils()
    {
        return $this->getProperty('guestPupils');
    }

    /**
     * @param int $guestPupils
     */
    public function setGuestPupils($guestPupils = null)
    {
        $this->setProperty('guestPupils', $guestPupils);
    }

    /**
     * @return string
     */
    public function getInfantPupilExceptions()
    {
        return $this->getProperty('infantPupilExceptions');
    }

    /**
     * @param string $infantPupilExceptions
     */
    public function setInfantPupilExceptions($infantPupilExceptions = null)
    {
        $this->setProperty('infantPupilExceptions', $infantPupilExceptions);
    }

}
