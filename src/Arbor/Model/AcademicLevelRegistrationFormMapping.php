<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicLevelRegistrationFormMapping extends ModelBase
{
    public const ACADEMIC_LEVEL = 'academicLevel';

    public const REGISTRATION_FORM = 'registrationForm';

    protected $_resourceType = ResourceType::ACADEMIC_LEVEL_REGISTRATION_FORM_MAPPING;

    /**
     * @param Query $query
     * @return AcademicLevelRegistrationFormMapping[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_LEVEL_REGISTRATION_FORM_MAPPING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicLevelRegistrationFormMapping
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_LEVEL_REGISTRATION_FORM_MAPPING, $id);
    }

    /**
     * @return \Arbor\Model\AcademicLevel
     */
    public function getAcademicLevel()
    {
        return $this->getProperty('academicLevel');
    }

    /**
     * @param \Arbor\Model\AcademicLevel $academicLevel
     */
    public function setAcademicLevel(\Arbor\Model\AcademicLevel $academicLevel = null)
    {
        $this->setProperty('academicLevel', $academicLevel);
    }

    /**
     * @return \Arbor\Model\RegistrationForm
     */
    public function getRegistrationForm()
    {
        return $this->getProperty('registrationForm');
    }

    /**
     * @param \Arbor\Model\RegistrationForm $registrationForm
     */
    public function setRegistrationForm(\Arbor\Model\RegistrationForm $registrationForm = null)
    {
        $this->setProperty('registrationForm', $registrationForm);
    }
}
