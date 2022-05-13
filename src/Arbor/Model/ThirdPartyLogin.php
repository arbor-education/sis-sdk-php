<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ThirdPartyLogin extends ModelBase
{
    const THIRD_PARTY_SITE = 'thirdPartySite';

    const USERNAME = 'username';

    const PASSWORD = 'password';

    const VERIFIED_DATETIME = 'verifiedDatetime';

    const FAILED_DATETIME = 'failedDatetime';

    const PERSON = 'person';

    protected $_resourceType = ResourceType::THIRD_PARTY_LOGIN;

    /**
     * @param Query $query
     * @return ThirdPartyLogin[] | Collection
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

        $query->setResourceType(ResourceType::THIRD_PARTY_LOGIN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ThirdPartyLogin
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::THIRD_PARTY_LOGIN, $id);
    }

    /**
     * @return ThirdPartySite
     */
    public function getThirdPartySite()
    {
        return $this->getProperty('thirdPartySite');
    }

    /**
     * @param ThirdPartySite $thirdPartySite
     */
    public function setThirdPartySite(ThirdPartySite $thirdPartySite = null)
    {
        $this->setProperty('thirdPartySite', $thirdPartySite);
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->getProperty('username');
    }

    /**
     * @param string $username
     */
    public function setUsername($username = null)
    {
        $this->setProperty('username', $username);
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->getProperty('password');
    }

    /**
     * @param string $password
     */
    public function setPassword($password = null)
    {
        $this->setProperty('password', $password);
    }

    /**
     * @return \DateTime
     */
    public function getVerifiedDatetime()
    {
        return $this->getProperty('verifiedDatetime');
    }

    /**
     * @param \DateTime $verifiedDatetime
     */
    public function setVerifiedDatetime(\DateTime $verifiedDatetime = null)
    {
        $this->setProperty('verifiedDatetime', $verifiedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getFailedDatetime()
    {
        return $this->getProperty('failedDatetime');
    }

    /**
     * @param \DateTime $failedDatetime
     */
    public function setFailedDatetime(\DateTime $failedDatetime = null)
    {
        $this->setProperty('failedDatetime', $failedDatetime);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(ModelBase $person = null)
    {
        $this->setProperty('person', $person);
    }

}
