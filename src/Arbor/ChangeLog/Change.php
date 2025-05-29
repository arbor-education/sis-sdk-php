<?php

namespace Arbor\ChangeLog;

use Arbor\Model\ModelBase;

class Change
{
    public function __construct(
        protected ModelBase $changedResource,
        protected string    $changeType,
        protected int       $changedFromRevision,
        protected int       $changedToRevision
    ) {
    }

    public function setChangeType(string $changeType): void
    {
        $this->changeType = $changeType;
    }

    public function getChangeType(): string
    {
        return $this->changeType;
    }

    public function setChangedFromRevision(int $changedFromRevision): void
    {
        $this->changedFromRevision = $changedFromRevision;
    }

    /**
     * @return int
     */
    public function getChangedFromRevision(): int
    {
        return $this->changedFromRevision;
    }

    public function setChangedResource(ModelBase $changedResource): void
    {
        $this->changedResource = $changedResource;
    }

    public function getChangedResource(): ModelBase
    {
        return $this->changedResource;
    }

    public function setChangedToRevision(int $changedToRevision): void
    {
        $this->changedToRevision = $changedToRevision;
    }

    public function getChangedToRevision(): int
    {
        return $this->changedToRevision;
    }
}
