<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomReportCardStudent extends \ModelBase
{
    public const CUSTOM_REPORT_CARD = 'customReportCard';

    public const STUDENT = 'student';

    public const STATUS = 'status';

    public const GENERATED_DATETIME = 'generatedDatetime';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_CARD_STUDENT;

    /**
     * @param Query $query
     * @return CustomReportCardStudent[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_REPORT_CARD_STUDENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportCardStudent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_CARD_STUDENT, $id);
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
    public function setCustomReportCard(\CustomReportCard $customReportCard = null)
    {
        $this->setProperty('customReportCard', $customReportCard);
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
    public function setStudent(\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status = null)
    {
        $this->setProperty('status', $status);
    }

    /**
     * @return \DateTime
     */
    public function getGeneratedDatetime()
    {
        return $this->getProperty('generatedDatetime');
    }

    /**
     * @param \DateTime $generatedDatetime
     */
    public function setGeneratedDatetime(\DateTime $generatedDatetime = null)
    {
        $this->setProperty('generatedDatetime', $generatedDatetime);
    }
}
