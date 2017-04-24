<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class PasswordRule extends ModelBase
{
    const APPLIES_FOR = 'appliesFor';

    const MIN_LENGTH = 'minLength';

    const DAYS_VALID = 'daysValid';

    const REQUIRE_NUMBER = 'requireNumber';

    const REQUIRE_LETTER = 'requireLetter';

    const REQUIRE_MIXED_CASE = 'requireMixedCase';

    protected $_resourceType = ResourceType::PASSWORD_RULE;

    /**
     * @param \Arbor\Query\Query $query
     * @return PasswordRule[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PasswordRule");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PasswordRule
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PASSWORD_RULE, $id);
    }

    /**
     * @return string
     */
    public function getAppliesFor()
    {
        return $this->getProperty("appliesFor");
    }

    /**
     * @param string $appliesFor
     */
    public function setAppliesFor($appliesFor = null)
    {
        $this->setProperty("appliesFor", $appliesFor);
    }

    /**
     * @return int
     */
    public function getMinLength()
    {
        return $this->getProperty("minLength");
    }

    /**
     * @param int $minLength
     */
    public function setMinLength($minLength = null)
    {
        $this->setProperty("minLength", $minLength);
    }

    /**
     * @return int
     */
    public function getDaysValid()
    {
        return $this->getProperty("daysValid");
    }

    /**
     * @param int $daysValid
     */
    public function setDaysValid($daysValid = null)
    {
        $this->setProperty("daysValid", $daysValid);
    }

    /**
     * @return bool
     */
    public function getRequireNumber()
    {
        return $this->getProperty("requireNumber");
    }

    /**
     * @param bool $requireNumber
     */
    public function setRequireNumber($requireNumber = null)
    {
        $this->setProperty("requireNumber", $requireNumber);
    }

    /**
     * @return bool
     */
    public function getRequireLetter()
    {
        return $this->getProperty("requireLetter");
    }

    /**
     * @param bool $requireLetter
     */
    public function setRequireLetter($requireLetter = null)
    {
        $this->setProperty("requireLetter", $requireLetter);
    }

    /**
     * @return bool
     */
    public function getRequireMixedCase()
    {
        return $this->getProperty("requireMixedCase");
    }

    /**
     * @param bool $requireMixedCase
     */
    public function setRequireMixedCase($requireMixedCase = null)
    {
        $this->setProperty("requireMixedCase", $requireMixedCase);
    }
}
