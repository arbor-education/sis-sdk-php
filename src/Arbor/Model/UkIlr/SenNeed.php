<?php
namespace Arbor\Model\UkIlr;

use Arbor\Resource\UkIlr\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SenNeed extends ModelBase
{
    public const IS_AGREED_WITH_STUDENT = 'isAgreedWithStudent';

    protected $_resourceType = ResourceType::UK_ILR_SEN_NEED;

    /**
     * @param Query $query
     * @return SenNeed[] | Collection
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

        $query->setResourceType(ResourceType::UK_ILR_SEN_NEED);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SenNeed
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_ILR_SEN_NEED, $id);
    }

    /**
     * @return bool
     */
    public function getIsAgreedWithStudent()
    {
        return $this->getProperty('isAgreedWithStudent');
    }

    /**
     * @param bool $isAgreedWithStudent
     */
    public function setIsAgreedWithStudent(bool $isAgreedWithStudent = null)
    {
        $this->setProperty('isAgreedWithStudent', $isAgreedWithStudent);
    }
}
