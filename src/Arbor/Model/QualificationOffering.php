<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationOffering extends ModelBase
{
    const QUALIFICATION_ELEMENT = 'qualificationElement';

    const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::QUALIFICATION_OFFERING;

    /**
     * @param Query $query
     * @return QualificationOffering[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_OFFERING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationOffering
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_OFFERING, $id);
    }

    /**
     * @return ModelBase
     */
    public function getQualificationElement()
    {
        return $this->getProperty('qualificationElement');
    }

    /**
     * @param ModelBase $qualificationElement
     */
    public function setQualificationElement(ModelBase $qualificationElement = null)
    {
        $this->setProperty('qualificationElement', $qualificationElement);
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

}
