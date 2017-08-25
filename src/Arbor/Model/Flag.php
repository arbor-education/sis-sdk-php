<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Flag extends ModelBase
{
    const PERSON = 'person';

    const TEXT = 'text';

    const TARGET = 'target';

    protected $_resourceType = ResourceType::FLAG;

    /**
     * @param Query $query
     * @return Flag[] | Collection
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

        $query->setResourceType(ResourceType::FLAG);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Flag
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::FLAG, $id);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(ModelBase $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->getProperty('text');
    }

    /**
     * @param string $text
     */
    public function setText($text = null)
    {
        $this->setProperty('text', $text);
    }

    /**
     * @return ModelBase
     */
    public function getTarget()
    {
        return $this->getProperty('target');
    }

    /**
     * @param ModelBase $target
     */
    public function setTarget(ModelBase $target = null)
    {
        $this->setProperty('target', $target);
    }
}
