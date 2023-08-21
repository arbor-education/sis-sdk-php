<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationElementAvailability extends ModelBase
{

    public const QUALIFICATION_AVAILABILITY_INSTANCE = 'qualificationAvailabilityInstance';

    public const QUALIFICATION_ELEMENT = 'qualificationElement';

    protected $_resourceType = ResourceType::QUALIFICATION_ELEMENT_AVAILABILITY;

    /**
     * @param Query $query
     * @return QualificationElementAvailability[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_ELEMENT_AVAILABILITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationElementAvailability
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_ELEMENT_AVAILABILITY, $id);
    }

    /**
     * @return \Arbor\Model\QualificationAvailabilityInstance
     */
    public function getQualificationAvailabilityInstance()
    {
        return $this->getProperty('qualificationAvailabilityInstance');
    }

    /**
     * @param \Arbor\Model\QualificationAvailabilityInstance
     * $qualificationAvailabilityInstance
     */
    public function setQualificationAvailabilityInstance(\Arbor\Model\QualificationAvailabilityInstance $qualificationAvailabilityInstance = null)
    {
        $this->setProperty('qualificationAvailabilityInstance', $qualificationAvailabilityInstance);
    }

    /**
     * @return ModelBase
     */
    public function getQualificationElement()
    {
        return $this->getProperty('qualificationElement');
    }

    /**
     * @param ModelBase $qualificationElement
     */
    public function setQualificationElement(\ModelBase $qualificationElement = null)
    {
        $this->setProperty('qualificationElement', $qualificationElement);
    }

}
