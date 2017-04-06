<?php

namespace Arbor\ChangeLog;

class Change
{
    /**@var string $_changeType*/
    protected $_changeType;
    /**@var \Arbor\Model\ModelBase $_changedResource*/
    protected $_changedResource;
    /**@var int $_changedFromRevisionUrl*/
    protected $_changedFromRevision;
    /**@var int $_changedToRevisionUrl*/
    protected $_changedToRevision;

    /**
     * @param \Arbor\Model\ModelBase $changedResource
     * @param string $changeType
     * @param int $changedFromRevision
     * @param int $changedToRevision
     */
    public function __construct($changedResource, $changeType, $changedFromRevision, $changedToRevision)
    {
        $this->setChangeType($changeType);
        $this->setChangedResource($changedResource);
        $this->setChangedFromRevision($changedFromRevision);
        $this->setChangedToRevision($changedToRevision);
    }

    /**
     * @param string $changeType
     */
    public function setChangeType($changeType)
    {
        $this->_changeType = $changeType;
    }

    /**
     * @return string
     */
    public function getChangeType()
    {
        return $this->_changeType;
    }

    /**
     * @param int $changedFromRevision
     */
    public function setChangedFromRevision($changedFromRevision)
    {
        $this->_changedFromRevision = $changedFromRevision;
    }

    /**
     * @return int
     */
    public function getChangedFromRevision()
    {
        return $this->_changedFromRevision;
    }

    /**
     * @param \Arbor\Model\ModelBase $changedResource
     */
    public function setChangedResource($changedResource)
    {
        $this->_changedResource = $changedResource;
    }

    /**
     * @return \Arbor\Model\ModelBase
     */
    public function getChangedResource()
    {
        return $this->_changedResource;
    }



    /**
     * @param int $changedToRevision
     */
    public function setChangedToRevision($changedToRevision)
    {
        $this->_changedToRevision = $changedToRevision;
    }

    /**
     * @return int
     */
    public function getChangedToRevision()
    {
        return $this->_changedToRevision;
    }
}