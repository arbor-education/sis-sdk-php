<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicUnitQualificationLink extends ModelBase
{
    public const ACADEMIC_UNIT = 'academicUnit';

    public const QUALIFICATION_ASSESSABLE = 'qualificationAssessable';

    public const AUTOMATIC_ENTRY = 'automaticEntry';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_QUALIFICATION_LINK;

    /**
     * @param Query $query
     * @return AcademicUnitQualificationLink[] | Collection
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
     * @return \Arbor\Model\AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param \Arbor\Model\AcademicUnit $academicUnit
     */
    public function setAcademicUnit(\Arbor\Model\AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
    }

    /**
     * @return \Arbor\Model\QualificationAssessable
     */
    public function getQualificationAssessable()
    {
        return $this->getProperty('qualificationAssessable');
    }

    /**
     * @param \Arbor\Model\QualificationAssessable $qualificationAssessable
     */
    public function setQualificationAssessable(\Arbor\Model\QualificationAssessable $qualificationAssessable = null)
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
    public function setAutomaticEntry(bool $automaticEntry = null)
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
