<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProgrammeQualificationAward extends ModelBase
{

    const PROGRAMME_INSTANCE = 'programmeInstance';

    const QUALIFICATION_AWARD = 'qualificationAward';

    protected $_resourceType = ResourceType::PROGRAMME_QUALIFICATION_AWARD;

    /**
     * @param Query $query
     * @return ProgrammeQualificationAward[] | Collection
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
     * @return ProgrammeInstance
     */
    public function getProgrammeInstance()
    {
        return $this->getProperty('programmeInstance');
    }

    /**
     * @param ProgrammeInstance $programmeInstance
     */
    public function setProgrammeInstance(ProgrammeInstance $programmeInstance = null)
    {
        $this->setProperty('programmeInstance', $programmeInstance);
    }

    /**
     * @return QualificationAward
     */
    public function getQualificationAward()
    {
        return $this->getProperty('qualificationAward');
    }

    /**
     * @param QualificationAward $qualificationAward
     */
    public function setQualificationAward(QualificationAward $qualificationAward = null)
    {
        $this->setProperty('qualificationAward', $qualificationAward);
    }


}
