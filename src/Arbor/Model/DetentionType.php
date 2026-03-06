<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class DetentionType extends ModelBase
{
    public const DETENTION_TYPE_NAME = 'detentionTypeName';

    public const ACADEMIC_YEAR = 'academicYear';

    protected $_resourceType = ResourceType::DETENTION_TYPE;

    /**
     * @param Query $query
     * @return DetentionType[] | Collection
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
    public function setDetentionTypeName(string $detentionTypeName = null)
    {
        $this->setProperty('detentionTypeName', $detentionTypeName);
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
}
