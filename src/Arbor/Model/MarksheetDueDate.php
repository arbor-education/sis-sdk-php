<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MarksheetDueDate extends ModelBase
{
    public const MARKSHEET = 'marksheet';

    public const ASSESSMENT_DATA_DROP = 'assessmentDataDrop';

    public const DUE_DATE = 'dueDate';

    protected $_resourceType = ResourceType::MARKSHEET_DUE_DATE;

    /**
     * @param Query $query
     * @return MarksheetDueDate[] | Collection
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

        $query->setResourceType(ResourceType::MARKSHEET_DUE_DATE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MarksheetDueDate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MARKSHEET_DUE_DATE, $id);
    }

    /**
     * @return \Arbor\Model\AssessmentMarksheet
     */
    public function getMarksheet()
    {
        return $this->getProperty('marksheet');
    }

    /**
     * @param \Arbor\Model\AssessmentMarksheet $marksheet
     */
    public function setMarksheet(\Arbor\Model\AssessmentMarksheet $marksheet = null)
    {
        $this->setProperty('marksheet', $marksheet);
    }

    /**
     * @return \Arbor\Model\AssessmentDataDrop
     */
    public function getAssessmentDataDrop()
    {
        return $this->getProperty('assessmentDataDrop');
    }

    /**
     * @param \Arbor\Model\AssessmentDataDrop $assessmentDataDrop
     */
    public function setAssessmentDataDrop(\Arbor\Model\AssessmentDataDrop $assessmentDataDrop = null)
    {
        $this->setProperty('assessmentDataDrop', $assessmentDataDrop);
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->getProperty('dueDate');
    }

    /**
     * @param \DateTime $dueDate
     */
    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->setProperty('dueDate', $dueDate);
    }
}
