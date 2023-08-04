<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicUnitMarksheetCustomReport extends \ModelBase
{
    public const ACADEMIC_UNIT = 'academicUnit';

    public const CUSTOM_REPORT = 'customReport';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_MARKSHEET_CUSTOM_REPORT;

    /**
     * @param Query $query
     * @return AcademicUnitMarksheetCustomReport[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_UNIT_MARKSHEET_CUSTOM_REPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnitMarksheetCustomReport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT_MARKSHEET_CUSTOM_REPORT, $id);
    }

    /**
     * @return AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param AcademicUnit $academicUnit
     */
    public function setAcademicUnit(\AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
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
    public function setCustomReport(\CustomReport $customReport = null)
    {
        $this->setProperty('customReport', $customReport);
    }
}
