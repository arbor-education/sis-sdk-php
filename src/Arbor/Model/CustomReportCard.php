<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CustomReportCard extends ModelBase
{
    const ACADEMIC_YEAR = 'academicYear';

    const TITLE = 'title';

    const DATE = 'date';

    const CUSTOM_REPORT = 'customReport';

    const ORIENTATION = 'orientation';

    const REMOVE_BLANK_ROWS = 'removeBlankRows';

    const TEMPLATE = 'template';

    const SHARED_WITH_GUARDIANS = 'sharedWithGuardians';

    const SHARED_WITH_STUDENTS = 'sharedWithStudents';

    const DELETION_STARTED_DATETIME = 'deletionStartedDatetime';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_CARD;

    /**
     * @param Query $query
     * @return CustomReportCard[] | Collection
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

        $query->setResourceType(ResourceType::CUSTOM_REPORT_CARD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CustomReportCard
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_CARD, $id);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param string $title
     */
    public function setTitle($title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->getProperty('date');
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date = null)
    {
        $this->setProperty('date', $date);
    }

    /**
     * @return CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param CustomReport $customReport
     */
    public function setCustomReport(CustomReport $customReport = null)
    {
        $this->setProperty('customReport', $customReport);
    }

    /**
     * @return string
     */
    public function getOrientation()
    {
        return $this->getProperty('orientation');
    }

    /**
     * @param string $orientation
     */
    public function setOrientation($orientation = null)
    {
        $this->setProperty('orientation', $orientation);
    }

    /**
     * @return bool
     */
    public function getRemoveBlankRows()
    {
        return $this->getProperty('removeBlankRows');
    }

    /**
     * @param bool $removeBlankRows
     */
    public function setRemoveBlankRows($removeBlankRows = null)
    {
        $this->setProperty('removeBlankRows', $removeBlankRows);
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->getProperty('template');
    }

    /**
     * @param string $template
     */
    public function setTemplate($template = null)
    {
        $this->setProperty('template', $template);
    }

    /**
     * @return bool
     */
    public function getSharedWithGuardians()
    {
        return $this->getProperty('sharedWithGuardians');
    }

    /**
     * @param bool $sharedWithGuardians
     */
    public function setSharedWithGuardians($sharedWithGuardians = null)
    {
        $this->setProperty('sharedWithGuardians', $sharedWithGuardians);
    }

    /**
     * @return bool
     */
    public function getSharedWithStudents()
    {
        return $this->getProperty('sharedWithStudents');
    }

    /**
     * @param bool $sharedWithStudents
     */
    public function setSharedWithStudents($sharedWithStudents = null)
    {
        $this->setProperty('sharedWithStudents', $sharedWithStudents);
    }

    /**
     * @return \DateTime
     */
    public function getDeletionStartedDatetime()
    {
        return $this->getProperty('deletionStartedDatetime');
    }

    /**
     * @param \DateTime $deletionStartedDatetime
     */
    public function setDeletionStartedDatetime(\DateTime $deletionStartedDatetime = null)
    {
        $this->setProperty('deletionStartedDatetime', $deletionStartedDatetime);
    }
}
