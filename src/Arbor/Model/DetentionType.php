<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class DetentionType extends ModelBase
{
    const DETENTION_TYPE_NAME = 'detentionTypeName';

    const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::DETENTION_TYPE;

    /**
     * @param Query $query
     * @return DetentionType[] | Collection
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

        $query->setResourceType(ResourceType::DETENTION_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DetentionType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DETENTION_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getDetentionTypeName()
    {
        return $this->getProperty('detentionTypeName');
    }

    /**
     * @param string $detentionTypeName
     */
    public function setDetentionTypeName($detentionTypeName = null)
    {
        $this->setProperty('detentionTypeName', $detentionTypeName);
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
