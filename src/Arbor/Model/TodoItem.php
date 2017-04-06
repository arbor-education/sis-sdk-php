<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class TodoItem extends ModelBase
{

    const IDENTIFIER = 'identifier';

    const TEXT = 'text';

    const ASSIGNEE = 'assignee';

    const REFERENCE_DATETIME = 'referenceDatetime';

    const DUE_DATETIME = 'dueDatetime';

    const RESOLVED_DATETIME = 'resolvedDatetime';

    const ORIGIN = 'origin';

    const TYPE = 'type';

    protected $_resourceType = ResourceType::TODO_ITEM;

    /**
     * @param \Arbor\Query\Query $query
     * @return TodoItem[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("TodoItem");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return TodoItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::TODO_ITEM, $id);
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->getProperty("identifier");
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier($identifier = null)
    {
        $this->setProperty("identifier", $identifier);
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->getProperty("text");
    }

    /**
     * @param string $text
     */
    public function setText($text = null)
    {
        $this->setProperty("text", $text);
    }

    /**
     * @return ModelBase
     */
    public function getAssignee()
    {
        return $this->getProperty("assignee");
    }

    /**
     * @param ModelBase $assignee
     */
    public function setAssignee(ModelBase $assignee = null)
    {
        $this->setProperty("assignee", $assignee);
    }

    /**
     * @return \DateTime
     */
    public function getReferenceDatetime()
    {
        return $this->getProperty("referenceDatetime");
    }

    /**
     * @param \DateTime $referenceDatetime
     */
    public function setReferenceDatetime(\DateTime $referenceDatetime = null)
    {
        $this->setProperty("referenceDatetime", $referenceDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getDueDatetime()
    {
        return $this->getProperty("dueDatetime");
    }

    /**
     * @param \DateTime $dueDatetime
     */
    public function setDueDatetime(\DateTime $dueDatetime = null)
    {
        $this->setProperty("dueDatetime", $dueDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getResolvedDatetime()
    {
        return $this->getProperty("resolvedDatetime");
    }

    /**
     * @param \DateTime $resolvedDatetime
     */
    public function setResolvedDatetime(\DateTime $resolvedDatetime = null)
    {
        $this->setProperty("resolvedDatetime", $resolvedDatetime);
    }

    /**
     * @return ModelBase
     */
    public function getOrigin()
    {
        return $this->getProperty("origin");
    }

    /**
     * @param ModelBase $origin
     */
    public function setOrigin(ModelBase $origin = null)
    {
        $this->setProperty("origin", $origin);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty("type");
    }

    /**
     * @param string $type
     */
    public function setType($type = null)
    {
        $this->setProperty("type", $type);
    }


}
