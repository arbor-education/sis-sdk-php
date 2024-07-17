<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class NewStudentReportCardSection extends ModelBase
{
    public const STUDENT_REPORT_CARD = 'studentReportCard';

    public const LINKED_ENTITY = 'linkedEntity';

    public const COMPLETED_DATETIME = 'completedDatetime';

    public const APPROVED_DATETIME = 'approvedDatetime';

    protected $_resourceType = ResourceType::NEW_STUDENT_REPORT_CARD_SECTION;

    /**
     * @param Query $query
     * @return NewStudentReportCardSection[] | Collection
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

        $query->setResourceType(ResourceType::NEW_STUDENT_REPORT_CARD_SECTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return NewStudentReportCardSection
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::NEW_STUDENT_REPORT_CARD_SECTION, $id);
    }

    /**
     * @return \Arbor\Model\NewStudentReportCard
     */
    public function getStudentReportCard()
    {
        return $this->getProperty('studentReportCard');
    }

    /**
     * @param \Arbor\Model\NewStudentReportCard $studentReportCard
     */
    public function setStudentReportCard(\Arbor\Model\NewStudentReportCard $studentReportCard = null)
    {
        $this->setProperty('studentReportCard', $studentReportCard);
    }

    /**
     * @return ModelBase
     */
    public function getLinkedEntity()
    {
        return $this->getProperty('linkedEntity');
    }

    /**
     * @param ModelBase $linkedEntity
     */
    public function setLinkedEntity(\ModelBase $linkedEntity = null)
    {
        $this->setProperty('linkedEntity', $linkedEntity);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty('completedDatetime');
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty('completedDatetime', $completedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDatetime()
    {
        return $this->getProperty('approvedDatetime');
    }

    /**
     * @param \DateTime $approvedDatetime
     */
    public function setApprovedDatetime(\DateTime $approvedDatetime = null)
    {
        $this->setProperty('approvedDatetime', $approvedDatetime);
    }
}
