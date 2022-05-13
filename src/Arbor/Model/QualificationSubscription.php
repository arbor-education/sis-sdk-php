<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationSubscription extends ModelBase
{
    const QUALIFICATION_ELEMENT_TYPE = 'qualificationElementType';

    const QUALIFICATION_ELEMENT_CODE = 'qualificationElementCode';

    const HASH = 'hash';

    protected $_resourceType = ResourceType::QUALIFICATION_SUBSCRIPTION;

    /**
     * @param Query $query
     * @return QualificationSubscription[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_SUBSCRIPTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationSubscription
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_SUBSCRIPTION, $id);
    }

    /**
     * @return string
     */
    public function getQualificationElementType()
    {
        return $this->getProperty('qualificationElementType');
    }

    /**
     * @param string $qualificationElementType
     */
    public function setQualificationElementType($qualificationElementType = null)
    {
        $this->setProperty('qualificationElementType', $qualificationElementType);
    }

    /**
     * @return string
     */
    public function getQualificationElementCode()
    {
        return $this->getProperty('qualificationElementCode');
    }

    /**
     * @param string $qualificationElementCode
     */
    public function setQualificationElementCode($qualificationElementCode = null)
    {
        $this->setProperty('qualificationElementCode', $qualificationElementCode);
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->getProperty('hash');
    }

    /**
     * @param string $hash
     */
    public function setHash($hash = null)
    {
        $this->setProperty('hash', $hash);
    }

}
