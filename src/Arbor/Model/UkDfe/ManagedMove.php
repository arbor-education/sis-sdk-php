<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class ManagedMove extends ModelBase
{
    public const EDUCATIONAL_INSTITUTION_ENROLMENT = 'educationalInstitutionEnrolment';

    public const DESTINATION_EDUCATIONAL_INSTITUTION = 'destinationEducationalInstitution';

    public const MANAGED_MOVE_REASON = 'managedMoveReason';

    public const MANAGED_MOVE_START_DATE = 'managedMoveStartDate';

    protected $_resourceType = ResourceType::UK_DFE_MANAGED_MOVE;

    /**
     * @param Query $query
     * @return ManagedMove[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_MANAGED_MOVE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ManagedMove
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_MANAGED_MOVE, $id);
    }

    /**
     * @return \Arbor\Model\EducationalInstitutionEnrolment
     */
    public function getEducationalInstitutionEnrolment()
    {
        return $this->getProperty('educationalInstitutionEnrolment');
    }

    /**
     * @param \Arbor\Model\EducationalInstitutionEnrolment
     * $educationalInstitutionEnrolment
     */
    public function setEducationalInstitutionEnrolment(\Arbor\Model\EducationalInstitutionEnrolment $educationalInstitutionEnrolment = null)
    {
        $this->setProperty('educationalInstitutionEnrolment', $educationalInstitutionEnrolment);
    }

    /**
     * @return \Arbor\Model\EducationalInstitution
     */
    public function getDestinationEducationalInstitution()
    {
        return $this->getProperty('destinationEducationalInstitution');
    }

    /**
     * @param \Arbor\Model\EducationalInstitution $destinationEducationalInstitution
     */
    public function setDestinationEducationalInstitution(\Arbor\Model\EducationalInstitution $destinationEducationalInstitution = null)
    {
        $this->setProperty('destinationEducationalInstitution', $destinationEducationalInstitution);
    }

    /**
     * @return string
     */
    public function getManagedMoveReason()
    {
        return $this->getProperty('managedMoveReason');
    }

    /**
     * @param string $managedMoveReason
     */
    public function setManagedMoveReason(string $managedMoveReason = null)
    {
        $this->setProperty('managedMoveReason', $managedMoveReason);
    }

    /**
     * @return \DateTime
     */
    public function getManagedMoveStartDate()
    {
        return $this->getProperty('managedMoveStartDate');
    }

    /**
     * @param \DateTime $managedMoveStartDate
     */
    public function setManagedMoveStartDate(\DateTime $managedMoveStartDate = null)
    {
        $this->setProperty('managedMoveStartDate', $managedMoveStartDate);
    }
}
