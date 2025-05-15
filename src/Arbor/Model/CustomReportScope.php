<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CustomReportScope extends ModelBase
{
    public const CUSTOM_REPORT = 'customReport';

    public const BASE_ENTITY_TYPE = 'baseEntityType';

    public const REFERENCE_DATE_RANGE_START_DATE = 'referenceDateRangeStartDate';

    public const REFERENCE_DATE_RANGE_END_DATE = 'referenceDateRangeEndDate';

    public const REFERENCE_DATE_RANGE_PERIOD_TYPE = 'referenceDateRangePeriodType';

    public const REFERENCE_DATE_RANGE_PERIOD_COUNT = 'referenceDateRangePeriodCount';

    public const REFERENCE_DATE_RANGE_PERIOD_OFFSET = 'referenceDateRangePeriodOffset';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_SCOPE;

    /**
     * @param Query $query
     * @return CustomReportScope[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_REPORT_SCOPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportScope
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_SCOPE, $id);
    }

    /**
     * @return \Arbor\Model\CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param \Arbor\Model\CustomReport $customReport
     */
    public function setCustomReport(\Arbor\Model\CustomReport $customReport = null)
    {
        $this->setProperty('customReport', $customReport);
    }

    /**
     * @return int
     */
    public function getBaseEntityType()
    {
        return $this->getProperty('baseEntityType');
    }

    /**
     * @param int $baseEntityType
     */
    public function setBaseEntityType(int $baseEntityType = null)
    {
        $this->setProperty('baseEntityType', $baseEntityType);
    }

    /**
     * @return \DateTime
     */
    public function getReferenceDateRangeStartDate()
    {
        return $this->getProperty('referenceDateRangeStartDate');
    }

    /**
     * @param \DateTime $referenceDateRangeStartDate
     */
    public function setReferenceDateRangeStartDate(\DateTime $referenceDateRangeStartDate = null)
    {
        $this->setProperty('referenceDateRangeStartDate', $referenceDateRangeStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getReferenceDateRangeEndDate()
    {
        return $this->getProperty('referenceDateRangeEndDate');
    }

    /**
     * @param \DateTime $referenceDateRangeEndDate
     */
    public function setReferenceDateRangeEndDate(\DateTime $referenceDateRangeEndDate = null)
    {
        $this->setProperty('referenceDateRangeEndDate', $referenceDateRangeEndDate);
    }

    /**
     * @return string
     */
    public function getReferenceDateRangePeriodType()
    {
        return $this->getProperty('referenceDateRangePeriodType');
    }

    /**
     * @param string $referenceDateRangePeriodType
     */
    public function setReferenceDateRangePeriodType(string $referenceDateRangePeriodType = null)
    {
        $this->setProperty('referenceDateRangePeriodType', $referenceDateRangePeriodType);
    }

    /**
     * @return int
     */
    public function getReferenceDateRangePeriodCount()
    {
        return $this->getProperty('referenceDateRangePeriodCount');
    }

    /**
     * @param int $referenceDateRangePeriodCount
     */
    public function setReferenceDateRangePeriodCount(int $referenceDateRangePeriodCount = null)
    {
        $this->setProperty('referenceDateRangePeriodCount', $referenceDateRangePeriodCount);
    }

    /**
     * @return int
     */
    public function getReferenceDateRangePeriodOffset()
    {
        return $this->getProperty('referenceDateRangePeriodOffset');
    }

    /**
     * @param int $referenceDateRangePeriodOffset
     */
    public function setReferenceDateRangePeriodOffset(int $referenceDateRangePeriodOffset = null)
    {
        $this->setProperty('referenceDateRangePeriodOffset', $referenceDateRangePeriodOffset);
    }
}
