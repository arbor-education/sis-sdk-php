<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class AcademicProgramme extends ModelBase
{
    const ACADEMIC_PROGRAMME_NAME = 'academicProgrammeName';

    protected $_resourceType = ResourceType::ACADEMIC_PROGRAMME;

    /**
     * @param \Arbor\Query\Query $query
     * @return AcademicProgramme[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("AcademicProgramme");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return AcademicProgramme
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ACADEMIC_PROGRAMME, $id);
    }

    /**
     * @return string
     */
    public function getAcademicProgrammeName()
    {
        return $this->getProperty("academicProgrammeName");
    }

    /**
     * @param string $academicProgrammeName
     */
    public function setAcademicProgrammeName($academicProgrammeName = null)
    {
        $this->setProperty("academicProgrammeName", $academicProgrammeName);
    }

    /**
     * @return Collection|\Arbor\Model\AcademicProgrammeInstance[]
     */
    public function getInstances()
    {
        return $this->getCollectionProperty("instances");
    }
}
