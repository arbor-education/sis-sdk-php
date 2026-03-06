<?php

namespace Arbor\Query;

use Arbor\Model\ModelBase;

class Query
{
    protected $_resourceType = null;
    /** @var array $_propertyFilters */
    protected $_propertyFilters = [];
    /** @var array $_userTagFilters */
    protected $_userTagFilters = [];
    /** @var int $_pageNumber */
    protected $_pageNumber = null;
    /** @var int $_pageSize */
    protected $_pageSize = null;
    /** @var string $_orderProperty */
    protected $_orderProperty = null;
    /** @var string $_orderDirection */
    protected $_orderDirection = null;
    /** @var array $_taggings */
    protected $_taggings = [];

    public const OPERATOR_EQUALS = 'equals';
    public const OPERATOR_FROM = 'from';
    public const OPERATOR_TO = 'to';
    public const OPERATOR_AFTER = 'after';
    public const OPERATOR_BEFORE = 'before';
    public const OPERATOR_SEARCH = 'search';
    public const OPERATOR_IN = 'in';

    public function __construct(
        $resourceType=null,
        $propertyFilters=[],
        $userTagFilters=[],
        $pageNumber=null,
        $pageSize=null,
        $taggingsFilter = [],
        $orderProperty=null
    ) {
        $this->setResourceType($resourceType);
        $this->setPropertyFilters($propertyFilters);
        $this->setUserTagFilters($userTagFilters);
        $this->setPageNumber($pageNumber);
        $this->setTaggings($taggingsFilter);
        $this->setPageSize($pageSize);
        $this->setOrderProperty($orderProperty);
    }
    /**
     * @param string $orderDirection
     */
    public function setOrderDirection($orderDirection)
    {
        $this->_orderDirection = $orderDirection;
    }

    /**
     * @return string
     */
    public function getOrderDirection()
    {
        return $this->_orderDirection;
    }

    /**
     * @param string $orderProperty
     */
    public function setOrderProperty($orderProperty)
    {
        $this->_orderProperty = $orderProperty;
    }

    /**
     * @return string
     */
    public function getOrderProperty()
    {
        return $this->_orderProperty;
    }

    /**
     * @param int $pageNumber
     */
    public function setPageNumber($pageNumber)
    {
        $this->_pageNumber = $pageNumber;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->_pageNumber;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->_pageSize = $pageSize;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->_pageSize;
    }

    /**
     * @param array $propertyFilters
     */
    public function setPropertyFilters($propertyFilters)
    {
        $this->_propertyFilters = $propertyFilters;
    }

    /**
     * @return array
     */
    public function getPropertyFilters()
    {
        return $this->_propertyFilters;
    }

    /**
     * @param $propertyName
     * @param $operator
     * @param $value
     */
    public function addPropertyFilter($propertyName, $operator, $value)
    {
        $this->_propertyFilters[] =
            [
                'propertyName' => $propertyName,
                'operator' => $operator,
                'value' => $value,
            ];
    }

    /**
     * @param string $tagName
     * @param string $value
     */
    public function addUserTagFilter($tagName, $value)
    {
        if ($value instanceof \DateTime) {
            $value = $value->format('Y-m-d H:i:s');
        }

        $this->_userTagFilters[] =
            [
                'tagName' => $tagName,
                'value' => $value,
            ];
    }

    /**
     * @param array $userTagFilters
     */
    public function setUserTagFilters($userTagFilters)
    {
        $this->_userTagFilters = $userTagFilters;
    }

    /**
     * @return array
     */
    public function getUserTagFilters()
    {
        return $this->_userTagFilters;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getQueryOptions()
    {
        $queryString = [];
        foreach ($this->getPropertyFilters() as $propertyFilter) {
            //Allow the value to be another model
            if ($propertyFilter['value'] instanceof ModelBase) {
                $resourceUrl = $propertyFilter['value']->getResourceUrl();
                if (empty($resourceUrl)) {
                    throw new Exception('Model user in filters must be connected and have a resource URL set');
                }
                $propertyFilter['value'] = $resourceUrl;
            } elseif ($propertyFilter['value'] instanceof \DateTime) {
                $propertyFilter['value'] = $propertyFilter['value']->format('Y-m-d H:i:s');
            } elseif (null === $propertyFilter['value']) {
                $propertyFilter['value']='NULL';
            }

            $key = 'filters.' . $propertyFilter['propertyName'] . '.' . $propertyFilter['operator'];
            $queryString[$key] = $propertyFilter['value'];
        }

        foreach ($this->getUserTagFilters() as $userTagFilter) {
            $tagKey = 'filters.tags.' . $userTagFilter['tagName'];
            $queryString[$tagKey] = $userTagFilter['value'];
        }

        if (null !== $this->getPageNumber()) {
            $queryString['page-number'] = $this->getPageNumber();
        }
        if (null !== $this->getPageSize()) {
            $queryString['page-size'] = $this->getPageSize();
        }
        if (null !== $this->getOrderProperty()) {
            $queryString['order-property'] = $this->getOrderProperty();
        }

        foreach ($this->getTaggings() as $tag) {
            $queryString['filters.self.tagged'] = $tag;
        }

        return $queryString;
    }

    /**
     * @param null $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->_resourceType = $resourceType;
    }

    /**
     * @return string|null
     */
    public function getResourceType(): ?string
    {
        return $this->_resourceType;
    }

    public function getTaggings()
    {
        return $this->_taggings;
    }

    public function setTaggings($taggings)
    {
        $this->_taggings = $taggings;
    }
}
