<?php

namespace Arbor\Model;

/**
 * Class Collection
 * Storage class for collections of objects returned by navigation properties
 * @package Arbor\Model
 */
class Collection extends \ArrayObject
{
    /**
     * @param ModelBase $model
     */
    public function add($model)
    {
        return $this->append($model);
    }
}
