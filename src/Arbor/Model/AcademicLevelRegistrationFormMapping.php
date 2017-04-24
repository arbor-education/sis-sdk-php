<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AcademicLevel;
use \Arbor\Model\RegistrationForm;

class AcademicLevelRegistrationFormMapping extends ModelBase
{
    const ACADEMIC_LEVEL = 'academicLevel';

    const REGISTRATION_FORM = 'registrationForm';

    protected $_resourceType = ResourceType::ACADEMIC_LEVEL_REGISTRATION_FORM_MAPPING;

    /**
     * @param \Arbor\Query\Query $query
     * @return AcademicLevelRegistrationFormMapping[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("AcademicLevelRegistrationFormMapping");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AcademicLevelRegistrationFormMapping
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ACADEMIC_LEVEL_REGISTRATION_FORM_MAPPING, $id);
    }

    /**
     * @return AcademicLevel
     */
    public function getAcademicLevel()
    {
        return $this->getProperty("academicLevel");
    }

    /**
     * @param AcademicLevel $academicLevel
     */
    public function setAcademicLevel(AcademicLevel $academicLevel = null)
    {
        $this->setProperty("academicLevel", $academicLevel);
    }

    /**
     * @return RegistrationForm
     */
    public function getRegistrationForm()
    {
        return $this->getProperty("registrationForm");
    }

    /**
     * @param RegistrationForm $registrationForm
     */
    public function setRegistrationForm(RegistrationForm $registrationForm = null)
    {
        $this->setProperty("registrationForm", $registrationForm);
    }
}
