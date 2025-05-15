<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IdentityCard extends ModelBase
{
    public const OWNER = 'owner';

    public const CARD_NUMBER = 'cardNumber';

    public const ACTIVE = 'active';

    public const ISSUED_DATETIME = 'issuedDatetime';

    public const LOST_DATETIME = 'lostDatetime';

    protected $_resourceType = ResourceType::IDENTITY_CARD;

    /**
     * @param Query $query
     * @return IdentityCard[] | Collection
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

        $query->setResourceType(ResourceType::IDENTITY_CARD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IdentityCard
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IDENTITY_CARD, $id);
    }

    /**
     * @return ModelBase
     */
    public function getOwner()
    {
        return $this->getProperty('owner');
    }

    /**
     * @param ModelBase $owner
     */
    public function setOwner(\ModelBase $owner = null)
    {
        $this->setProperty('owner', $owner);
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->getProperty('cardNumber');
    }

    /**
     * @param string $cardNumber
     */
    public function setCardNumber(string $cardNumber = null)
    {
        $this->setProperty('cardNumber', $cardNumber);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return \DateTime
     */
    public function getIssuedDatetime()
    {
        return $this->getProperty('issuedDatetime');
    }

    /**
     * @param \DateTime $issuedDatetime
     */
    public function setIssuedDatetime(\DateTime $issuedDatetime = null)
    {
        $this->setProperty('issuedDatetime', $issuedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getLostDatetime()
    {
        return $this->getProperty('lostDatetime');
    }

    /**
     * @param \DateTime $lostDatetime
     */
    public function setLostDatetime(\DateTime $lostDatetime = null)
    {
        $this->setProperty('lostDatetime', $lostDatetime);
    }
}
