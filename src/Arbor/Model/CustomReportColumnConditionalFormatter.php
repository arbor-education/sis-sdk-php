<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomReportColumnConditionalFormatter extends \ModelBase
{
    public const CUSTOM_REPORT_COLUMN = 'customReportColumn';

    public const CONDITION_CLASS = 'conditionClass';

    public const CONDITION_PARAMS = 'conditionParams';

    public const COLOR = 'color';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_COLUMN_CONDITIONAL_FORMATTER;

    /**
     * @param Query $query
     * @return CustomReportColumnConditionalFormatter[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::CUSTOM_REPORT_COLUMN_CONDITIONAL_FORMATTER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportColumnConditionalFormatter
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_COLUMN_CONDITIONAL_FORMATTER, $id);
    }

    /**
     * @return CustomReportColumn
     */
    public function getCustomReportColumn()
    {
        return $this->getProperty('customReportColumn');
    }

    /**
     * @param CustomReportColumn $customReportColumn
     */
    public function setCustomReportColumn(\CustomReportColumn $customReportColumn = null)
    {
        $this->setProperty('customReportColumn', $customReportColumn);
    }

    /**
     * @return string
     */
    public function getConditionClass()
    {
        return $this->getProperty('conditionClass');
    }

    /**
     * @param string $conditionClass
     */
    public function setConditionClass(string $conditionClass = null)
    {
        $this->setProperty('conditionClass', $conditionClass);
    }

    /**
     * @return string
     */
    public function getConditionParams()
    {
        return $this->getProperty('conditionParams');
    }

    /**
     * @param string $conditionParams
     */
    public function setConditionParams(string $conditionParams = null)
    {
        $this->setProperty('conditionParams', $conditionParams);
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->getProperty('color');
    }

    /**
     * @param string $color
     */
    public function setColor(string $color = null)
    {
        $this->setProperty('color', $color);
    }
}
