<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class RegistrationForm extends ModelBase
{
    public const CODE = 'code';

    public const REGISTRATION_FORM_NAME = 'registrationFormName';

    public const SHORT_NAME = 'shortName';

    public const ROOM = 'room';

    public const ACADEMIC_YEAR = 'academicYear';

    public const PROMOTED_TO_REGISTRATION_FORM = 'promotedToRegistrationForm';

    public const PROMOTED_DATETIME = 'promotedDatetime';

    public const COPIED_TO_REGISTRATION_FORM = 'copiedToRegistrationForm';

    public const DISPLAY_ORDER = 'displayOrder';

    public const TARGET_ENROLMENT = 'targetEnrolment';

    protected $_resourceType = ResourceType::REGISTRATION_FORM;

    /**
     * @param Query $query
     * @return RegistrationForm[] | Collection
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

        $query->setResourceType(ResourceType::REGISTRATION_FORM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return RegistrationForm
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::REGISTRATION_FORM, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return string
     */
    public function getRegistrationFormName()
    {
        return $this->getProperty('registrationFormName');
    }

    /**
     * @param string $registrationFormName
     */
    public function setRegistrationFormName(string $registrationFormName = null)
    {
        $this->setProperty('registrationFormName', $registrationFormName);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return \Arbor\Model\Room
     */
    public function getRoom()
    {
        return $this->getProperty('room');
    }

    /**
     * @param \Arbor\Model\Room $room
     */
    public function setRoom(\Arbor\Model\Room $room = null)
    {
        $this->setProperty('room', $room);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return \Arbor\Model\RegistrationForm
     */
    public function getPromotedToRegistrationForm()
    {
        return $this->getProperty('promotedToRegistrationForm');
    }

    /**
     * @param \Arbor\Model\RegistrationForm $promotedToRegistrationForm
     */
    public function setPromotedToRegistrationForm(\Arbor\Model\RegistrationForm $promotedToRegistrationForm = null)
    {
        $this->setProperty('promotedToRegistrationForm', $promotedToRegistrationForm);
    }

    /**
     * @return \DateTime
     */
    public function getPromotedDatetime()
    {
        return $this->getProperty('promotedDatetime');
    }

    /**
     * @param \DateTime $promotedDatetime
     */
    public function setPromotedDatetime(\DateTime $promotedDatetime = null)
    {
        $this->setProperty('promotedDatetime', $promotedDatetime);
    }

    /**
     * @return \Arbor\Model\RegistrationForm
     */
    public function getCopiedToRegistrationForm()
    {
        return $this->getProperty('copiedToRegistrationForm');
    }

    /**
     * @param \Arbor\Model\RegistrationForm $copiedToRegistrationForm
     */
    public function setCopiedToRegistrationForm(\Arbor\Model\RegistrationForm $copiedToRegistrationForm = null)
    {
        $this->setProperty('copiedToRegistrationForm', $copiedToRegistrationForm);
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->getProperty('displayOrder');
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder = null)
    {
        $this->setProperty('displayOrder', $displayOrder);
    }

    /**
     * @return int
     */
    public function getTargetEnrolment()
    {
        return $this->getProperty('targetEnrolment');
    }

    /**
     * @param int $targetEnrolment
     */
    public function setTargetEnrolment(int $targetEnrolment = null)
    {
        $this->setProperty('targetEnrolment', $targetEnrolment);
    }

    /**
     * @return Collection|\Arbor\Model\RegistrationFormTutor[]
     */
    public function getTutors()
    {
        return $this->getCollectionProperty('tutors');
    }

    /**
     * @return Collection|\Arbor\Model\RegistrationFormMembership[]
     */
    public function getStudentMemberships()
    {
        return $this->getCollectionProperty('studentMemberships');
    }
}
