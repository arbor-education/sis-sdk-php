<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\NewStudentReportCard;

class NewStudentReportCardSection extends ModelBase
{

    const STUDENT_REPORT_CARD = 'studentReportCard';

    const LINKED_ENTITY = 'linkedEntity';

    const COMPLETED_DATETIME = 'completedDatetime';

    const APPROVED_DATETIME = 'approvedDatetime';

    protected $_resourceType = ResourceType::NEW_STUDENT_REPORT_CARD_SECTION;

    /**
     * @param \Arbor\Query\Query $query
     * @return NewStudentReportCardSection[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("NewStudentReportCardSection");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return NewStudentReportCardSection
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::NEW_STUDENT_REPORT_CARD_SECTION, $id);
    }

    /**
     * @return NewStudentReportCard
     */
    public function getStudentReportCard()
    {
        return $this->getProperty("studentReportCard");
    }

    /**
     * @param NewStudentReportCard $studentReportCard
     */
    public function setStudentReportCard(NewStudentReportCard $studentReportCard = null)
    {
        $this->setProperty("studentReportCard", $studentReportCard);
    }

    /**
     * @return ModelBase
     */
    public function getLinkedEntity()
    {
        return $this->getProperty("linkedEntity");
    }

    /**
     * @param ModelBase $linkedEntity
     */
    public function setLinkedEntity(ModelBase $linkedEntity = null)
    {
        $this->setProperty("linkedEntity", $linkedEntity);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty("completedDatetime");
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty("completedDatetime", $completedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDatetime()
    {
        return $this->getProperty("approvedDatetime");
    }

    /**
     * @param \DateTime $approvedDatetime
     */
    public function setApprovedDatetime(\DateTime $approvedDatetime = null)
    {
        $this->setProperty("approvedDatetime", $approvedDatetime);
    }


}
