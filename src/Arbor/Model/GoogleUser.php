<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class GoogleUser extends ModelBase
{
    public const GIVEN_NAME = 'givenName';

    public const FAMILY_NAME = 'familyName';

    public const PRIMARY_EMAIL = 'primaryEmail';

    public const GOOGLE_IDENTIFIER = 'googleIdentifier';

    public const MATCHED_PERSON = 'matchedPerson';

    protected $_resourceType = ResourceType::GOOGLE_USER;

    /**
     * @param Query $query
     * @return GoogleUser[] | Collection
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

        $query->setResourceType(ResourceType::GOOGLE_USER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return GoogleUser
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GOOGLE_USER, $id);
    }

    /**
     * @return string
     */
    public function getGivenName()
    {
        return $this->getProperty('givenName');
    }

    /**
     * @param string $givenName
     */
    public function setGivenName(string $givenName = null)
    {
        $this->setProperty('givenName', $givenName);
    }

    /**
     * @return string
     */
    public function getFamilyName()
    {
        return $this->getProperty('familyName');
    }

    /**
     * @param string $familyName
     */
    public function setFamilyName(string $familyName = null)
    {
        $this->setProperty('familyName', $familyName);
    }

    /**
     * @return string
     */
    public function getPrimaryEmail()
    {
        return $this->getProperty('primaryEmail');
    }

    /**
     * @param string $primaryEmail
     */
    public function setPrimaryEmail(string $primaryEmail = null)
    {
        $this->setProperty('primaryEmail', $primaryEmail);
    }

    /**
     * @return string
     */
    public function getGoogleIdentifier()
    {
        return $this->getProperty('googleIdentifier');
    }

    /**
     * @param string $googleIdentifier
     */
    public function setGoogleIdentifier(string $googleIdentifier = null)
    {
        $this->setProperty('googleIdentifier', $googleIdentifier);
    }

    /**
     * @return ModelBase
     */
    public function getMatchedPerson()
    {
        return $this->getProperty('matchedPerson');
    }

    /**
     * @param ModelBase $matchedPerson
     */
    public function setMatchedPerson(\ModelBase $matchedPerson = null)
    {
        $this->setProperty('matchedPerson', $matchedPerson);
    }
}
