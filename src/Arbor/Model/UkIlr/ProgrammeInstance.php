<?php
namespace Arbor\Model\UkIlr;

use Arbor\Resource\UkIlr\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class ProgrammeInstance extends ModelBase
{
    const PROGRAMME_TYPE = 'programmeType';

    const FUNDING_MODEL = 'fundingModel';

    const AIM_TYPE = 'aimType';

    const SOURCE_OF_FUNDING = 'sourceOfFunding';

    protected $_resourceType = ResourceType::UK_ILR_PROGRAMME_INSTANCE;

    /**
     * @param Query $query
     * @return ProgrammeInstance[] | Collection
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

        $query->setResourceType(ResourceType::UK_ILR_PROGRAMME_INSTANCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgrammeInstance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_ILR_PROGRAMME_INSTANCE, $id);
    }

    /**
     * @return string
     */
    public function getProgrammeType()
    {
        return $this->getProperty('programmeType');
    }

    /**
     * @param string $programmeType
     */
    public function setProgrammeType($programmeType = null)
    {
        $this->setProperty('programmeType', $programmeType);
    }

    /**
     * @return string
     */
    public function getFundingModel()
    {
        return $this->getProperty('fundingModel');
    }

    /**
     * @param string $fundingModel
     */
    public function setFundingModel($fundingModel = null)
    {
        $this->setProperty('fundingModel', $fundingModel);
    }

    /**
     * @return string
     */
    public function getAimType()
    {
        return $this->getProperty('aimType');
    }

    /**
     * @param string $aimType
     */
    public function setAimType($aimType = null)
    {
        $this->setProperty('aimType', $aimType);
    }

    /**
     * @return string
     */
    public function getSourceOfFunding()
    {
        return $this->getProperty('sourceOfFunding');
    }

    /**
     * @param string $sourceOfFunding
     */
    public function setSourceOfFunding($sourceOfFunding = null)
    {
        $this->setProperty('sourceOfFunding', $sourceOfFunding);
    }
}
