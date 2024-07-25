<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentImportItem extends ModelBase
{
    public const ASSESSMENT_IMPORT_COLUMN = 'assessmentImportColumn';

    public const ASSESSMENT_IMPORT_ROW = 'assessmentImportRow';

    public const DATA_VALUE = 'dataValue';

    public const IMPORTED_DATETIME = 'importedDatetime';

    protected $_resourceType = ResourceType::ASSESSMENT_IMPORT_ITEM;

    /**
     * @param Query $query
     * @return AssessmentImportItem[] | Collection
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
     * @return \Arbor\Model\AssessmentImportColumn
     */
    public function getAssessmentImportColumn()
    {
        return $this->getProperty('assessmentImportColumn');
    }

    /**
     * @param \Arbor\Model\AssessmentImportColumn $assessmentImportColumn
     */
    public function setAssessmentImportColumn(\Arbor\Model\AssessmentImportColumn $assessmentImportColumn = null)
    {
        $this->setProperty('assessmentImportColumn', $assessmentImportColumn);
    }

    /**
     * @return \Arbor\Model\AssessmentImportRow
     */
    public function getAssessmentImportRow()
    {
        return $this->getProperty('assessmentImportRow');
    }

    /**
     * @param \Arbor\Model\AssessmentImportRow $assessmentImportRow
     */
    public function setAssessmentImportRow(\Arbor\Model\AssessmentImportRow $assessmentImportRow = null)
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
    public function setDataValue(string $dataValue = null)
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
