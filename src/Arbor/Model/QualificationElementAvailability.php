<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\QualificationAvailabilityInstance;

class QualificationElementAvailability extends ModelBase
{

    const QUALIFICATION_AVAILABILITY_INSTANCE = 'qualificationAvailabilityInstance';

    const QUALIFICATION_ELEMENT = 'qualificationElement';

    protected $_resourceType = ResourceType::QUALIFICATION_ELEMENT_AVAILABILITY;

    /**
     * @param \Arbor\Query\Query $query
     * @return QualificationElementAvailability[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("QualificationElementAvailability");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return QualificationElementAvailability
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::QUALIFICATION_ELEMENT_AVAILABILITY, $id);
    }

    /**
     * @return QualificationAvailabilityInstance
     */
    public function getQualificationAvailabilityInstance()
    {
        return $this->getProperty("qualificationAvailabilityInstance");
    }

    /**
     * @param QualificationAvailabilityInstance $qualificationAvailabilityInstance
     */
    public function setQualificationAvailabilityInstance(QualificationAvailabilityInstance $qualificationAvailabilityInstance = null)
    {
        $this->setProperty("qualificationAvailabilityInstance", $qualificationAvailabilityInstance);
    }

    /**
     * @return ModelBase
     */
    public function getQualificationElement()
    {
        return $this->getProperty("qualificationElement");
    }

    /**
     * @param ModelBase $qualificationElement
     */
    public function setQualificationElement(ModelBase $qualificationElement = null)
    {
        $this->setProperty("qualificationElement", $qualificationElement);
    }


}
