<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Room;
use \Arbor\Model\AcademicYear;

class RegistrationForm extends ModelBase
{

    const CODE = 'code';

    const REGISTRATION_FORM_NAME = 'registrationFormName';

    const SHORT_NAME = 'shortName';

    const ROOM = 'room';

    const ACADEMIC_YEAR = 'academicYear';

    const PROMOTED_TO_REGISTRATION_FORM = 'promotedToRegistrationForm';

    const PROMOTED_DATETIME = 'promotedDatetime';

    const COPIED_TO_REGISTRATION_FORM = 'copiedToRegistrationForm';

    const DISPLAY_ORDER = 'displayOrder';

    const TARGET_ENROLMENT = 'targetEnrolment';

    protected $_resourceType = ResourceType::REGISTRATION_FORM;

    /**
     * @param \Arbor\Query\Query $query
     * @return RegistrationForm[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("RegistrationForm");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return RegistrationForm
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::REGISTRATION_FORM, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return string
     */
    public function getRegistrationFormName()
    {
        return $this->getProperty("registrationFormName");
    }

    /**
     * @param string $registrationFormName
     */
    public function setRegistrationFormName($registrationFormName = null)
    {
        $this->setProperty("registrationFormName", $registrationFormName);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty("shortName");
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty("shortName", $shortName);
    }

    /**
     * @return Room
     */
    public function getRoom()
    {
        return $this->getProperty("room");
    }

    /**
     * @param Room $room
     */
    public function setRoom(Room $room = null)
    {
        $this->setProperty("room", $room);
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
     * @return RegistrationForm
     */
    public function getPromotedToRegistrationForm()
    {
        return $this->getProperty("promotedToRegistrationForm");
    }

    /**
     * @param RegistrationForm $promotedToRegistrationForm
     */
    public function setPromotedToRegistrationForm(RegistrationForm $promotedToRegistrationForm = null)
    {
        $this->setProperty("promotedToRegistrationForm", $promotedToRegistrationForm);
    }

    /**
     * @return \DateTime
     */
    public function getPromotedDatetime()
    {
        return $this->getProperty("promotedDatetime");
    }

    /**
     * @param \DateTime $promotedDatetime
     */
    public function setPromotedDatetime(\DateTime $promotedDatetime = null)
    {
        $this->setProperty("promotedDatetime", $promotedDatetime);
    }

    /**
     * @return RegistrationForm
     */
    public function getCopiedToRegistrationForm()
    {
        return $this->getProperty("copiedToRegistrationForm");
    }

    /**
     * @param RegistrationForm $copiedToRegistrationForm
     */
    public function setCopiedToRegistrationForm(RegistrationForm $copiedToRegistrationForm = null)
    {
        $this->setProperty("copiedToRegistrationForm", $copiedToRegistrationForm);
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->getProperty("displayOrder");
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder($displayOrder = null)
    {
        $this->setProperty("displayOrder", $displayOrder);
    }

    /**
     * @return int
     */
    public function getTargetEnrolment()
    {
        return $this->getProperty("targetEnrolment");
    }

    /**
     * @param int $targetEnrolment
     */
    public function setTargetEnrolment($targetEnrolment = null)
    {
        $this->setProperty("targetEnrolment", $targetEnrolment);
    }

    /**
     * @return Collection|\Arbor\Model\RegistrationFormTutor[]
     */
    public function getTutors()
    {
        return $this->getCollectionProperty("tutors");
    }

    /**
     * @return Collection|\Arbor\Model\RegistrationFormMembership[]
     */
    public function getStudentMemberships()
    {
        return $this->getCollectionProperty("studentMemberships");
    }


}
