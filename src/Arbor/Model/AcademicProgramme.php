<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicProgramme extends ModelBase
{
    public const ACADEMIC_PROGRAMME_NAME = 'academicProgrammeName';

    protected $_resourceType = ResourceType::ACADEMIC_PROGRAMME;

    /**
     * @param Query $query
     * @return AcademicProgramme[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_PROGRAMME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicProgramme
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_PROGRAMME, $id);
    }

    /**
     * @return string
     */
    public function getAcademicProgrammeName()
    {
        return $this->getProperty('academicProgrammeName');
    }

    /**
     * @param string $academicProgrammeName
     */
    public function setAcademicProgrammeName(string $academicProgrammeName = null)
    {
        $this->setProperty('academicProgrammeName', $academicProgrammeName);
    }

    /**
     * @return Collection|\Arbor\Model\AcademicProgrammeInstance[]
     */
    public function getInstances()
    {
        return $this->getCollectionProperty('instances');
    }
}
