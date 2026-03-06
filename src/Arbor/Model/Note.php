<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Note extends ModelBase
{
    public const NOTE = 'note';

    public const REFERENCE_OBJECT = 'referenceObject';

    public const IS_SHARED_WITH_GUARDIANS = 'isSharedWithGuardians';

    protected $_resourceType = ResourceType::NOTE;

    /**
     * @param Query $query
     * @return Note[] | Collection
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

        $query->setResourceType(ResourceType::NOTE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Note
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::NOTE, $id);
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->getProperty('note');
    }

    /**
     * @param string $note
     */
    public function setNote(string $note = null)
    {
        $this->setProperty('note', $note);
    }

    /**
     * @return ModelBase
     */
    public function getReferenceObject()
    {
        return $this->getProperty('referenceObject');
    }

    /**
     * @param ModelBase $referenceObject
     */
    public function setReferenceObject(\ModelBase $referenceObject = null)
    {
        $this->setProperty('referenceObject', $referenceObject);
    }

    /**
     * @return bool
     */
    public function getIsSharedWithGuardians()
    {
        return $this->getProperty('isSharedWithGuardians');
    }

    /**
     * @param bool $isSharedWithGuardians
     */
    public function setIsSharedWithGuardians(bool $isSharedWithGuardians = null)
    {
        $this->setProperty('isSharedWithGuardians', $isSharedWithGuardians);
    }
}
