<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InternalExclusionType extends ModelBase
{
    const INTERNAL_EXCLUSION_TYPE_NAME = 'internalExclusionTypeName';

    const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::INTERNAL_EXCLUSION_TYPE;

    /**
     * @param Query $query
     * @return InternalExclusionType[] | Collection
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

        $query->setResourceType(ResourceType::INTERNAL_EXCLUSION_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InternalExclusionType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERNAL_EXCLUSION_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getInternalExclusionTypeName()
    {
        return $this->getProperty('internalExclusionTypeName');
    }

    /**
     * @param string $internalExclusionTypeName
     */
    public function setInternalExclusionTypeName($internalExclusionTypeName = null)
    {
        $this->setProperty('internalExclusionTypeName', $internalExclusionTypeName);
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
