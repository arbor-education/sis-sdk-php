<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AcademicUnitQualificationLink extends ModelBase
{
    const ACADEMIC_UNIT = 'academicUnit';

    const QUALIFICATION_ASSESSABLE = 'qualificationAssessable';

    const AUTOMATIC_ENTRY = 'automaticEntry';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_QUALIFICATION_LINK;

    /**
     * @param Query $query
     * @return AcademicUnitQualificationLink[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_UNIT_QUALIFICATION_LINK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnitQualificationLink
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT_QUALIFICATION_LINK, $id);
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
    public function setAcademicUnit(AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
    }

    /**
     * @return QualificationAssessable
     */
    public function getQualificationAssessable()
    {
        return $this->getProperty('qualificationAssessable');
    }

    /**
     * @param QualificationAssessable $qualificationAssessable
     */
    public function setQualificationAssessable(QualificationAssessable $qualificationAssessable = null)
    {
        $this->setProperty('qualificationAssessable', $qualificationAssessable);
    }

    /**
     * @return bool
     */
    public function getAutomaticEntry()
    {
        return $this->getProperty('automaticEntry');
    }

    /**
     * @param bool $automaticEntry
     */
    public function setAutomaticEntry($automaticEntry = null)
    {
        $this->setProperty('automaticEntry', $automaticEntry);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
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

}
