<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;

class Club extends ModelBase
{

    const NAME = 'name';

    const DESCRIPTION = 'description';

    const ACADEMIC_YEAR = 'academicYear';

    const MAX_MEMBERS_PER_SESSION = 'maxMembersPerSession';

    const REQUIRE_CONSENT = 'requireConsent';

    const COPIED_TO_CLUB = 'copiedToClub';

    protected $_resourceType = ResourceType::CLUB;

    /**
     * @param \Arbor\Query\Query $query
     * @return Club[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Club");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Club
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CLUB, $id);
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
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty("description");
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty("description", $description);
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
     * @return int
     */
    public function getMaxMembersPerSession()
    {
        return $this->getProperty("maxMembersPerSession");
    }

    /**
     * @param int $maxMembersPerSession
     */
    public function setMaxMembersPerSession($maxMembersPerSession = null)
    {
        $this->setProperty("maxMembersPerSession", $maxMembersPerSession);
    }

    /**
     * @return bool
     */
    public function getRequireConsent()
    {
        return $this->getProperty("requireConsent");
    }

    /**
     * @param bool $requireConsent
     */
    public function setRequireConsent($requireConsent = null)
    {
        $this->setProperty("requireConsent", $requireConsent);
    }

    /**
     * @return Club
     */
    public function getCopiedToClub()
    {
        return $this->getProperty("copiedToClub");
    }

    /**
     * @param Club $copiedToClub
     */
    public function setCopiedToClub(Club $copiedToClub = null)
    {
        $this->setProperty("copiedToClub", $copiedToClub);
    }


}
