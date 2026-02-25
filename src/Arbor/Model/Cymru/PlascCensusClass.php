<?php

namespace Arbor\Model\Cymru;

use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\Cymru\ResourceType;

class PlascCensusClass extends ModelBase
{
    public const DATA_RETURN = 'dataReturn';

    public const SESSION = 'session';

    public const TEACHERS = 'teachers';

    public const NON_TEACHERS = 'nonTeachers';

    public const HOME_PUPILS = 'homePupils';

    public const GUEST_PUPILS = 'guestPupils';

    public const KEY_STAGE = 'keyStage';

    public const CLASS_SIZE_COUNT_TYPE = 'classSizeCountType';

    protected $_resourceType = ResourceType::CYMRU_PLASC_CENSUS_CLASS;

    /**
     * @param Query $query
     * @return PlascCensusClass[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_PLASC_CENSUS_CLASS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PlascCensusClass
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_PLASC_CENSUS_CLASS, $id);
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
     * @return \Arbor\Model\Session
     */
    public function getSession()
    {
        return $this->getProperty('session');
    }

    /**
     * @param \Arbor\Model\Session $session
     */
    public function setSession(\Arbor\Model\Session $session = null)
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
    public function setTeachers(int $teachers = null)
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
    public function setNonTeachers(int $nonTeachers = null)
    {
        $this->setProperty('nonTeachers', $nonTeachers);
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
    public function setHomePupils(int $homePupils = null)
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
    public function setGuestPupils(int $guestPupils = null)
    {
        $this->setProperty('guestPupils', $guestPupils);
    }

    /**
     * @return string
     */
    public function getKeyStage()
    {
        return $this->getProperty('keyStage');
    }

    /**
     * @param string $keyStage
     */
    public function setKeyStage(string $keyStage = null)
    {
        $this->setProperty('keyStage', $keyStage);
    }

    /**
     * @return string
     */
    public function getClassSizeCountType()
    {
        return $this->getProperty('classSizeCountType');
    }

    /**
     * @param string $classSizeCountType
     */
    public function setClassSizeCountType(string $classSizeCountType = null)
    {
        $this->setProperty('classSizeCountType', $classSizeCountType);
    }
}
