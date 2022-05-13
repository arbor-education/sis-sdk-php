<?php
namespace Arbor\Model\UkIlr;

use Arbor\Resource\UkIlr\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\SenNeedType;

class MedicalCondition extends ModelBase
{

    const ILR_RETURN_SEN_NEED_TYPE = 'ilrReturnSenNeedType';

    protected $_resourceType = ResourceType::UK_ILR_MEDICAL_CONDITION;

    /**
     * @param Query $query
     * @return MedicalCondition[] | Collection
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

        $query->setResourceType(ResourceType::UK_ILR_MEDICAL_CONDITION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MedicalCondition
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_ILR_MEDICAL_CONDITION, $id);
    }

    /**
     * @return SenNeedType
     */
    public function getIlrReturnSenNeedType()
    {
        return $this->getProperty('ilrReturnSenNeedType');
    }

    /**
     * @param SenNeedType $ilrReturnSenNeedType
     */
    public function setIlrReturnSenNeedType(SenNeedType $ilrReturnSenNeedType = null)
    {
        $this->setProperty('ilrReturnSenNeedType', $ilrReturnSenNeedType);
    }


}
