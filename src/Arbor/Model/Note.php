<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Note extends ModelBase
{
    const NOTE = 'note';

    const REFERENCE_OBJECT = 'referenceObject';

    const IS_SHARED_WITH_GUARDIANS = 'isSharedWithGuardians';

    protected $_resourceType = ResourceType::NOTE;

    /**
     * @param \Arbor\Query\Query $query
     * @return Note[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Note");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Note
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::NOTE, $id);
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->getProperty("note");
    }

    /**
     * @param string $note
     */
    public function setNote($note = null)
    {
        $this->setProperty("note", $note);
    }

    /**
     * @return ModelBase
     */
    public function getReferenceObject()
    {
        return $this->getProperty("referenceObject");
    }

    /**
     * @param ModelBase $referenceObject
     */
    public function setReferenceObject(ModelBase $referenceObject = null)
    {
        $this->setProperty("referenceObject", $referenceObject);
    }

    /**
     * @return bool
     */
    public function getIsSharedWithGuardians()
    {
        return $this->getProperty("isSharedWithGuardians");
    }

    /**
     * @param bool $isSharedWithGuardians
     */
    public function setIsSharedWithGuardians($isSharedWithGuardians = null)
    {
        $this->setProperty("isSharedWithGuardians", $isSharedWithGuardians);
    }
}
