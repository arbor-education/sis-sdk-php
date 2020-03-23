<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Student;

class EarlyYearsPupilPremiumRecipient extends ModelBase
{

    const STUDENT = 'student';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const RECIPIENT_FOR_ECONOMIC_REASONS = 'recipientForEconomicReasons';

    const RECIPIENT_FOR_OTHER_REASONS = 'recipientForOtherReasons';

    protected $_resourceType = ResourceType::UK_DFE_EARLY_YEARS_PUPIL_PREMIUM_RECIPIENT;

    /**
     * @param Query $query
     * @return EarlyYearsPupilPremiumRecipient[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_EARLY_YEARS_PUPIL_PREMIUM_RECIPIENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EarlyYearsPupilPremiumRecipient
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_EARLY_YEARS_PUPIL_PREMIUM_RECIPIENT, $id);
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

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return bool
     */
    public function getRecipientForEconomicReasons()
    {
        return $this->getProperty('recipientForEconomicReasons');
    }

    /**
     * @param bool $recipientForEconomicReasons
     */
    public function setRecipientForEconomicReasons($recipientForEconomicReasons = null)
    {
        $this->setProperty('recipientForEconomicReasons', $recipientForEconomicReasons);
    }

    /**
     * @return bool
     */
    public function getRecipientForOtherReasons()
    {
        return $this->getProperty('recipientForOtherReasons');
    }

    /**
     * @param bool $recipientForOtherReasons
     */
    public function setRecipientForOtherReasons($recipientForOtherReasons = null)
    {
        $this->setProperty('recipientForOtherReasons', $recipientForOtherReasons);
    }


}
