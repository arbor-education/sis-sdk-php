<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentMarksheet extends ModelBase
{
    public const MARKSHEET_TEMPLATE = 'marksheetTemplate';

    public const ACADEMIC_YEAR = 'academicYear';

    public const LAST_MODIFIED_DATETIME = 'lastModifiedDatetime';

    protected $_resourceType = ResourceType::ASSESSMENT_MARKSHEET;

    /**
     * @param Query $query
     * @return AssessmentMarksheet[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_MARKSHEET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentMarksheet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_MARKSHEET, $id);
    }

    /**
     * @return \Arbor\Model\MarksheetTemplate
     */
    public function getMarksheetTemplate()
    {
        return $this->getProperty('marksheetTemplate');
    }

    /**
     * @param \Arbor\Model\MarksheetTemplate $marksheetTemplate
     */
    public function setMarksheetTemplate(\Arbor\Model\MarksheetTemplate $marksheetTemplate = null)
    {
        $this->setProperty('marksheetTemplate', $marksheetTemplate);
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
     * @return \DateTime
     */
    public function getLastModifiedDatetime()
    {
        return $this->getProperty('lastModifiedDatetime');
    }

    /**
     * @param \DateTime $lastModifiedDatetime
     */
    public function setLastModifiedDatetime(\DateTime $lastModifiedDatetime = null)
    {
        $this->setProperty('lastModifiedDatetime', $lastModifiedDatetime);
    }
}
