<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ExternallyGeneratedReportCard extends ModelBase
{

    const CONTENT = 'content';

    const REPORT_CARD_BATCH = 'reportCardBatch';

    const STUDENT = 'student';

    protected $_resourceType = ResourceType::EXTERNALLY_GENERATED_REPORT_CARD;

    /**
     * @param Query $query
     * @return ExternallyGeneratedReportCard[] | Collection
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

        $query->setResourceType(ResourceType::EXTERNALLY_GENERATED_REPORT_CARD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ExternallyGeneratedReportCard
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EXTERNALLY_GENERATED_REPORT_CARD, $id);
    }

    /**
     * @return Content
     */
    public function getContent()
    {
        return $this->getProperty('content');
    }

    /**
     * @param Content $content
     */
    public function setContent(Content $content = null)
    {
        $this->setProperty('content', $content);
    }

    /**
     * @return NewReportCardBatch
     */
    public function getReportCardBatch()
    {
        return $this->getProperty('reportCardBatch');
    }

    /**
     * @param NewReportCardBatch $reportCardBatch
     */
    public function setReportCardBatch(NewReportCardBatch $reportCardBatch = null)
    {
        $this->setProperty('reportCardBatch', $reportCardBatch);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }


}
