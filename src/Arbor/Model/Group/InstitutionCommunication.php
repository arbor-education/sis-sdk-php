<?php
namespace Arbor\Model\Group;

use Arbor\Resource\Group\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Email;

class InstitutionCommunication extends ModelBase
{

    const ENTITY = 'entity';

    const EMAIL = 'email';

    protected $_resourceType = ResourceType::GROUP_INSTITUTION_COMMUNICATION;

    /**
     * @param Query $query
     * @return InstitutionCommunication[] | Collection
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

        $query->setResourceType(ResourceType::GROUP_INSTITUTION_COMMUNICATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InstitutionCommunication
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GROUP_INSTITUTION_COMMUNICATION, $id);
    }

    /**
     * @return InstitutionDataSharingRequest
     */
    public function getEntity()
    {
        return $this->getProperty('entity');
    }

    /**
     * @param InstitutionDataSharingRequest $entity
     */
    public function setEntity(InstitutionDataSharingRequest $entity = null)
    {
        $this->setProperty('entity', $entity);
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
        return $this->getProperty('email');
    }

    /**
     * @param Email $email
     */
    public function setEmail(Email $email = null)
    {
        $this->setProperty('email', $email);
    }


}
