<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class QualificationElementDisallowedCombination extends ModelBase
{

    const FIRST_ELEMENT = 'firstElement';

    const SECOND_ELEMENT = 'secondElement';

    const DISALLOWED_SCOPE = 'disallowedScope';

    protected $_resourceType = ResourceType::QUALIFICATION_ELEMENT_DISALLOWED_COMBINATION;

    /**
     * @param \Arbor\Query\Query $query
     * @return QualificationElementDisallowedCombination[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("QualificationElementDisallowedCombination");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return QualificationElementDisallowedCombination
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::QUALIFICATION_ELEMENT_DISALLOWED_COMBINATION, $id);
    }

    /**
     * @return ModelBase
     */
    public function getFirstElement()
    {
        return $this->getProperty("firstElement");
    }

    /**
     * @param ModelBase $firstElement
     */
    public function setFirstElement(ModelBase $firstElement = null)
    {
        $this->setProperty("firstElement", $firstElement);
    }

    /**
     * @return ModelBase
     */
    public function getSecondElement()
    {
        return $this->getProperty("secondElement");
    }

    /**
     * @param ModelBase $secondElement
     */
    public function setSecondElement(ModelBase $secondElement = null)
    {
        $this->setProperty("secondElement", $secondElement);
    }

    /**
     * @return string
     */
    public function getDisallowedScope()
    {
        return $this->getProperty("disallowedScope");
    }

    /**
     * @param string $disallowedScope
     */
    public function setDisallowedScope($disallowedScope = null)
    {
        $this->setProperty("disallowedScope", $disallowedScope);
    }


}
