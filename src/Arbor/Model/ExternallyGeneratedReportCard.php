<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ExternallyGeneratedReportCard extends ModelBase
{
    public const CONTENT = 'content';

    public const REPORT_CARD_BATCH = 'reportCardBatch';

    public const STUDENT = 'student';

    protected $_resourceType = ResourceType::EXTERNALLY_GENERATED_REPORT_CARD;

    /**
     * @param Query $query
     * @return ExternallyGeneratedReportCard[] | Collection
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
     * @return \Arbor\Model\Content
     */
    public function getContent()
    {
        return $this->getProperty('content');
    }

    /**
     * @param \Arbor\Model\Content $content
     */
    public function setContent(\Arbor\Model\Content $content = null)
    {
        $this->setProperty('content', $content);
    }

    /**
     * @return \Arbor\Model\NewReportCardBatch
     */
    public function getReportCardBatch()
    {
        return $this->getProperty('reportCardBatch');
    }

    /**
     * @param \Arbor\Model\NewReportCardBatch $reportCardBatch
     */
    public function setReportCardBatch(\Arbor\Model\NewReportCardBatch $reportCardBatch = null)
    {
        $this->setProperty('reportCardBatch', $reportCardBatch);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }
}
