<?php
namespace Arbor\Model\Cayman;

use Arbor\Resource\Cayman\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class EducationalInstitution extends ModelBase
{
    public const LOCAL_AUTHORITY = 'localAuthority';

    public const ESTABLISHMENT_NUMBER = 'establishmentNumber';

    public const URN = 'urn';

    protected $_resourceType = ResourceType::CAYMAN_EDUCATIONAL_INSTITUTION;

    /**
     * @param Query $query
     * @return EducationalInstitution[] | Collection
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

        $query->setResourceType(ResourceType::CAYMAN_EDUCATIONAL_INSTITUTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EducationalInstitution
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CAYMAN_EDUCATIONAL_INSTITUTION, $id);
    }

    /**
     * @return \Arbor\Model\LocalAuthority
     */
    public function getLocalAuthority()
    {
        return $this->getProperty('localAuthority');
    }

    /**
     * @param \Arbor\Model\LocalAuthority $localAuthority
     */
    public function setLocalAuthority(\Arbor\Model\LocalAuthority $localAuthority = null)
    {
        $this->setProperty('localAuthority', $localAuthority);
    }

    /**
     * @return string
     */
    public function getEstablishmentNumber()
    {
        return $this->getProperty('establishmentNumber');
    }

    /**
     * @param string $establishmentNumber
     */
    public function setEstablishmentNumber(string $establishmentNumber = null)
    {
        $this->setProperty('establishmentNumber', $establishmentNumber);
    }

    /**
     * @return string
     */
    public function getUrn()
    {
        return $this->getProperty('urn');
    }

    /**
     * @param string $urn
     */
    public function setUrn(string $urn = null)
    {
        $this->setProperty('urn', $urn);
    }
}
