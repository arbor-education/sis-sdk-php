<?php

namespace Arbor\Model;

use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\ResourceType;

class MarksheetTemplateContextualColumn extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const CLASS = 'class';

    public const FORMATTER_CLASS = 'formatterClass';

    protected $_resourceType = ResourceType::MARKSHEET_TEMPLATE_CONTEXTUAL_COLUMN;

    /**
     * @param Query $query
     * @return MarksheetTemplateContextualColumn[] | Collection
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

        $query->setResourceType(ResourceType::MARKSHEET_TEMPLATE_CONTEXTUAL_COLUMN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MarksheetTemplateContextualColumn
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MARKSHEET_TEMPLATE_CONTEXTUAL_COLUMN, $id);
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
     * @return string
     */
    public function getClass()
    {
        return $this->getProperty('class');
    }

    /**
     * @param string $class
     */
    public function setClass(string $class = null)
    {
        $this->setProperty('class', $class);
    }

    /**
     * @return string
     */
    public function getFormatterClass()
    {
        return $this->getProperty('formatterClass');
    }

    /**
     * @param string $formatterClass
     */
    public function setFormatterClass(string $formatterClass = null)
    {
        $this->setProperty('formatterClass', $formatterClass);
    }
}
