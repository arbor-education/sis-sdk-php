<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentImportItem extends ModelBase
{
    const ASSESSMENT_IMPORT_COLUMN = 'assessmentImportColumn';

    const ASSESSMENT_IMPORT_ROW = 'assessmentImportRow';

    const DATA_VALUE = 'dataValue';

    const IMPORTED_DATETIME = 'importedDatetime';

    protected $_resourceType = ResourceType::ASSESSMENT_IMPORT_ITEM;

    /**
     * @param Query $query
     * @return AssessmentImportItem[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::ASSESSMENT_IMPORT_ITEM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentImportItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_IMPORT_ITEM, $id);
    }

    /**
     * @return AssessmentImportColumn
     */
    public function getAssessmentImportColumn()
    {
        return $this->getProperty('assessmentImportColumn');
    }

    /**
     * @param AssessmentImportColumn $assessmentImportColumn
     */
    public function setAssessmentImportColumn(AssessmentImportColumn $assessmentImportColumn = null)
    {
        $this->setProperty('assessmentImportColumn', $assessmentImportColumn);
    }

    /**
     * @return AssessmentImportRow
     */
    public function getAssessmentImportRow()
    {
        return $this->getProperty('assessmentImportRow');
    }

    /**
     * @param AssessmentImportRow $assessmentImportRow
     */
    public function setAssessmentImportRow(AssessmentImportRow $assessmentImportRow = null)
    {
        $this->setProperty('assessmentImportRow', $assessmentImportRow);
    }

    /**
     * @return string
     */
    public function getDataValue()
    {
        return $this->getProperty('dataValue');
    }

    /**
     * @param string $dataValue
     */
    public function setDataValue($dataValue = null)
    {
        $this->setProperty('dataValue', $dataValue);
    }

    /**
     * @return \DateTime
     */
    public function getImportedDatetime()
    {
        return $this->getProperty('importedDatetime');
    }

    /**
     * @param \DateTime $importedDatetime
     */
    public function setImportedDatetime(\DateTime $importedDatetime = null)
    {
        $this->setProperty('importedDatetime', $importedDatetime);
    }

}
