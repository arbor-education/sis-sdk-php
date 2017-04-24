<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicYear;

class Trip extends ModelBase
{
    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const LOCATION_TEXT = 'locationText';

    const LOCATION = 'location';

    const SCHEDULED_BY = 'scheduledBy';

    const NAME = 'name';

    const DESCRIPTION = 'description';

    const ACADEMIC_YEAR = 'academicYear';

    const LINK_TO = 'linkTo';

    const COPIED_TO_TRIP = 'copiedToTrip';

    const MAX_PARTICIPANTS = 'maxParticipants';

    const REQUIRE_CONSENT = 'requireConsent';

    const GUARDIAN_SIGNUP_START_DATETIME = 'guardianSignupStartDatetime';

    const GUARDIAN_SIGNUP_END_DATETIME = 'guardianSignupEndDatetime';

    protected $_resourceType = ResourceType::TRIP;

    /**
     * @param \Arbor\Query\Query $query
     * @return Trip[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Trip");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Trip
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::TRIP, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty("startDatetime");
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty("startDatetime", $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty("endDatetime");
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty("endDatetime", $endDatetime);
    }

    /**
     * @return string
     */
    public function getLocationText()
    {
        return $this->getProperty("locationText");
    }

    /**
     * @param string $locationText
     */
    public function setLocationText($locationText = null)
    {
        $this->setProperty("locationText", $locationText);
    }

    /**
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty("location");
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(ModelBase $location = null)
    {
        $this->setProperty("location", $location);
    }

    /**
     * @return ModelBase
     */
    public function getScheduledBy()
    {
        return $this->getProperty("scheduledBy");
    }

    /**
     * @param ModelBase $scheduledBy
     */
    public function setScheduledBy(ModelBase $scheduledBy = null)
    {
        $this->setProperty("scheduledBy", $scheduledBy);
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
     * @return ModelBase
     */
    public function getLinkTo()
    {
        return $this->getProperty("linkTo");
    }

    /**
     * @param ModelBase $linkTo
     */
    public function setLinkTo(ModelBase $linkTo = null)
    {
        $this->setProperty("linkTo", $linkTo);
    }

    /**
     * @return Trip
     */
    public function getCopiedToTrip()
    {
        return $this->getProperty("copiedToTrip");
    }

    /**
     * @param Trip $copiedToTrip
     */
    public function setCopiedToTrip(Trip $copiedToTrip = null)
    {
        $this->setProperty("copiedToTrip", $copiedToTrip);
    }

    /**
     * @return int
     */
    public function getMaxParticipants()
    {
        return $this->getProperty("maxParticipants");
    }

    /**
     * @param int $maxParticipants
     */
    public function setMaxParticipants($maxParticipants = null)
    {
        $this->setProperty("maxParticipants", $maxParticipants);
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
     * @return \DateTime
     */
    public function getGuardianSignupStartDatetime()
    {
        return $this->getProperty("guardianSignupStartDatetime");
    }

    /**
     * @param \DateTime $guardianSignupStartDatetime
     */
    public function setGuardianSignupStartDatetime(\DateTime $guardianSignupStartDatetime = null)
    {
        $this->setProperty("guardianSignupStartDatetime", $guardianSignupStartDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getGuardianSignupEndDatetime()
    {
        return $this->getProperty("guardianSignupEndDatetime");
    }

    /**
     * @param \DateTime $guardianSignupEndDatetime
     */
    public function setGuardianSignupEndDatetime(\DateTime $guardianSignupEndDatetime = null)
    {
        $this->setProperty("guardianSignupEndDatetime", $guardianSignupEndDatetime);
    }
}
