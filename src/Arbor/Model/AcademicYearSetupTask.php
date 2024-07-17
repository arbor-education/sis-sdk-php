<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicYearSetupTask extends ModelBase
{
    public const ACADEMIC_YEAR = 'academicYear';

    public const TYPE = 'type';

    public const APPROVED_DATETIME = 'approvedDatetime';

    public const SKIPPED_DATETIME = 'skippedDatetime';

    protected $_resourceType = ResourceType::ACADEMIC_YEAR_SETUP_TASK;

    /**
     * @param Query $query
     * @return AcademicYearSetupTask[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_YEAR_SETUP_TASK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicYearSetupTask
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_YEAR_SETUP_TASK, $id);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * @param string $type
     */
    public function setType(string $type = null)
    {
        $this->setProperty('type', $type);
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

    /**
     * @return \DateTime
     */
    public function getSkippedDatetime()
    {
        return $this->getProperty('skippedDatetime');
    }

    /**
     * @param \DateTime $skippedDatetime
     */
    public function setSkippedDatetime(\DateTime $skippedDatetime = null)
    {
        $this->setProperty('skippedDatetime', $skippedDatetime);
    }
}
