<?php
namespace Arbor\Model\UkJcq;

use Arbor\Resource\UkJcq\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class QualificationAvailabilityInstance extends ModelBase
{

    const EDI_AWARDING_BODY_IDENTIFIER = 'ediAwardingBodyIdentifier';

    protected $_resourceType = ResourceType::UK_JCQ_QUALIFICATION_AVAILABILITY_INSTANCE;

    /**
     * @param Query $query
     * @return QualificationAvailabilityInstance[] | Collection
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

        $query->setResourceType(ResourceType::UK_JCQ_QUALIFICATION_AVAILABILITY_INSTANCE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationAvailabilityInstance
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_JCQ_QUALIFICATION_AVAILABILITY_INSTANCE, $id);
    }

    /**
     * @return string
     */
    public function getEdiAwardingBodyIdentifier()
    {
        return $this->getProperty('ediAwardingBodyIdentifier');
    }

    /**
     * @param string $ediAwardingBodyIdentifier
     */
    public function setEdiAwardingBodyIdentifier($ediAwardingBodyIdentifier = null)
    {
        $this->setProperty('ediAwardingBodyIdentifier', $ediAwardingBodyIdentifier);
    }


}
