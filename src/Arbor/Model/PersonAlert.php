<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PersonAlert extends ModelBase
{

    const PERSON = 'person';

    const CONTEXT_PERSON = 'contextPerson';

    const CONTEXT_OBJECT = 'contextObject';

    const TYPE = 'type';

    const ALERT_DATETIME = 'alertDatetime';

    protected $_resourceType = ResourceType::PERSON_ALERT;

    /**
     * @param Query $query
     * @return PersonAlert[] | Collection
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

        $query->setResourceType(ResourceType::PERSON_ALERT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PersonAlert
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PERSON_ALERT, $id);
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
     * @return ModelBase
     */
    public function getContextPerson()
    {
        return $this->getProperty('contextPerson');
    }

    /**
     * @param ModelBase $contextPerson
     */
    public function setContextPerson(ModelBase $contextPerson = null)
    {
        $this->setProperty('contextPerson', $contextPerson);
    }

    /**
     * @return ModelBase
     */
    public function getContextObject()
    {
        return $this->getProperty('contextObject');
    }

    /**
     * @param ModelBase $contextObject
     */
    public function setContextObject(ModelBase $contextObject = null)
    {
        $this->setProperty('contextObject', $contextObject);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * @param string $type
     */
    public function setType($type = null)
    {
        $this->setProperty('type', $type);
    }

    /**
     * @return \DateTime
     */
    public function getAlertDatetime()
    {
        return $this->getProperty('alertDatetime');
    }

    /**
     * @param \DateTime $alertDatetime
     */
    public function setAlertDatetime(\DateTime $alertDatetime = null)
    {
        $this->setProperty('alertDatetime', $alertDatetime);
    }


}
