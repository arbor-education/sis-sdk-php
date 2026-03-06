<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ProgrammeQualificationAward extends ModelBase
{
    public const PROGRAMME_INSTANCE = 'programmeInstance';

    public const QUALIFICATION_AWARD = 'qualificationAward';

    protected $_resourceType = ResourceType::PROGRAMME_QUALIFICATION_AWARD;

    /**
     * @param Query $query
     * @return ProgrammeQualificationAward[] | Collection
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

        $query->setResourceType(ResourceType::PROGRAMME_QUALIFICATION_AWARD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgrammeQualificationAward
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROGRAMME_QUALIFICATION_AWARD, $id);
    }

    /**
     * @return \Arbor\Model\ProgrammeInstance
     */
    public function getProgrammeInstance()
    {
        return $this->getProperty('programmeInstance');
    }

    /**
     * @param \Arbor\Model\ProgrammeInstance $programmeInstance
     */
    public function setProgrammeInstance(\Arbor\Model\ProgrammeInstance $programmeInstance = null)
    {
        $this->setProperty('programmeInstance', $programmeInstance);
    }

    /**
     * @return \Arbor\Model\QualificationAward
     */
    public function getQualificationAward()
    {
        return $this->getProperty('qualificationAward');
    }

    /**
     * @param \Arbor\Model\QualificationAward $qualificationAward
     */
    public function setQualificationAward(\Arbor\Model\QualificationAward $qualificationAward = null)
    {
        $this->setProperty('qualificationAward', $qualificationAward);
    }
}
