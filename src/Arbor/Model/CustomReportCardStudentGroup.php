<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomReportCardStudentGroup extends ModelBase
{
    const CUSTOM_REPORT_CARD = 'customReportCard';

    const STUDENT_GROUP = 'studentGroup';

    const ENROLMENT_DATE = 'enrolmentDate';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_CARD_STUDENT_GROUP;

    /**
     * @param Query $query
     * @return CustomReportCardStudentGroup[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_REPORT_CARD_STUDENT_GROUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportCardStudentGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_CARD_STUDENT_GROUP, $id);
    }

    /**
     * @return CustomReportCard
     */
    public function getCustomReportCard()
    {
        return $this->getProperty('customReportCard');
    }

    /**
     * @param CustomReportCard $customReportCard
     */
    public function setCustomReportCard(CustomReportCard $customReportCard = null)
    {
        $this->setProperty('customReportCard', $customReportCard);
    }

    /**
     * @return ModelBase
     */
    public function getStudentGroup()
    {
        return $this->getProperty('studentGroup');
    }

    /**
     * @param ModelBase $studentGroup
     */
    public function setStudentGroup(ModelBase $studentGroup = null)
    {
        $this->setProperty('studentGroup', $studentGroup);
    }

    /**
     * @return \DateTime
     */
    public function getEnrolmentDate()
    {
        return $this->getProperty('enrolmentDate');
    }

    /**
     * @param \DateTime $enrolmentDate
     */
    public function setEnrolmentDate(\DateTime $enrolmentDate = null)
    {
        $this->setProperty('enrolmentDate', $enrolmentDate);
    }
}