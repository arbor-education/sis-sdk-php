<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationElementDisallowedCombination extends ModelBase
{
    const FIRST_ELEMENT = 'firstElement';

    const SECOND_ELEMENT = 'secondElement';

    protected $_resourceType = ResourceType::QUALIFICATION_ELEMENT_DISALLOWED_COMBINATION;

    /**
     * @param Query $query
     * @return QualificationElementDisallowedCombination[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::QUALIFICATION_ELEMENT_DISALLOWED_COMBINATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationElementDisallowedCombination
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_ELEMENT_DISALLOWED_COMBINATION, $id);
    }

    /**
     * @return ModelBase
     */
    public function getFirstElement()
    {
        return $this->getProperty('firstElement');
    }

    /**
     * @param ModelBase $firstElement
     */
    public function setFirstElement(ModelBase $firstElement = null)
    {
        $this->setProperty('firstElement', $firstElement);
    }

    /**
     * @return ModelBase
     */
    public function getSecondElement()
    {
        return $this->getProperty('secondElement');
    }

    /**
     * @param ModelBase $secondElement
     */
    public function setSecondElement(ModelBase $secondElement = null)
    {
        $this->setProperty('secondElement', $secondElement);
    }

}
