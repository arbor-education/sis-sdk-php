<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\ProgrammeInstance;
use \Arbor\Model\QualificationAward;

class ProgrammeQualificationAward extends ModelBase
{

    const PROGRAMME_INSTANCE = 'programmeInstance';

    const QUALIFICATION_AWARD = 'qualificationAward';

    protected $_resourceType = ResourceType::PROGRAMME_QUALIFICATION_AWARD;

    /**
     * @param \Arbor\Query\Query $query
     * @return ProgrammeQualificationAward[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("ProgrammeQualificationAward");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ProgrammeQualificationAward
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::PROGRAMME_QUALIFICATION_AWARD, $id);
    }

    /**
     * @return ProgrammeInstance
     */
    public function getProgrammeInstance()
    {
        return $this->getProperty("programmeInstance");
    }

    /**
     * @param ProgrammeInstance $programmeInstance
     */
    public function setProgrammeInstance(ProgrammeInstance $programmeInstance = null)
    {
        $this->setProperty("programmeInstance", $programmeInstance);
    }

    /**
     * @return QualificationAward
     */
    public function getQualificationAward()
    {
        return $this->getProperty("qualificationAward");
    }

    /**
     * @param QualificationAward $qualificationAward
     */
    public function setQualificationAward(QualificationAward $qualificationAward = null)
    {
        $this->setProperty("qualificationAward", $qualificationAward);
    }


}
