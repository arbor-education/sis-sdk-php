<?php

namespace Arbor\Model;

use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\ResourceType;

class MarksheetTemplateColumn extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const MARKSHEET_TEMPLATE = 'marksheetTemplate';

    public const COLUMN = 'column';

    public const NAME = 'name';

    public const COLUMN_ORDER = 'columnOrder';

    public const VISIBILITY = 'visibility';

    public const IS_LOCKED = 'isLocked';

    protected $_resourceType = ResourceType::MARKSHEET_TEMPLATE_COLUMN;

    /**
     * @param Query $query
     * @return MarksheetTemplateColumn[] | Collection
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

        $query->setResourceType(ResourceType::MARKSHEET_TEMPLATE_COLUMN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MarksheetTemplateColumn
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MARKSHEET_TEMPLATE_COLUMN, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return \Arbor\Model\MarksheetTemplate
     */
    public function getMarksheetTemplate()
    {
        return $this->getProperty('marksheetTemplate');
    }

    /**
     * @param \Arbor\Model\MarksheetTemplate $marksheetTemplate
     */
    public function setMarksheetTemplate(\Arbor\Model\MarksheetTemplate $marksheetTemplate = null)
    {
        $this->setProperty('marksheetTemplate', $marksheetTemplate);
    }

    /**
     * @return ModelBase
     */
    public function getColumn()
    {
        return $this->getProperty('column');
    }

    /**
     * @param ModelBase $column
     */
    public function setColumn(\ModelBase $column = null)
    {
        $this->setProperty('column', $column);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return int
     */
    public function getColumnOrder()
    {
        return $this->getProperty('columnOrder');
    }

    /**
     * @param int $columnOrder
     */
    public function setColumnOrder(int $columnOrder = null)
    {
        $this->setProperty('columnOrder', $columnOrder);
    }

    /**
     * @return string
     */
    public function getVisibility()
    {
        return $this->getProperty('visibility');
    }

    /**
     * @param string $visibility
     */
    public function setVisibility(string $visibility = null)
    {
        $this->setProperty('visibility', $visibility);
    }

    /**
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->getProperty('isLocked');
    }

    /**
     * @param bool $isLocked
     */
    public function setIsLocked(bool $isLocked = null)
    {
        $this->setProperty('isLocked', $isLocked);
    }
}
