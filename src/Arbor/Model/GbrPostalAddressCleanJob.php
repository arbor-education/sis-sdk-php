<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\PostalAddress;

class GbrPostalAddressCleanJob extends ModelBase
{
    const POSTAL_ADDRESS = 'postalAddress';

    const EXECUTED_DATETIME = 'executedDatetime';

    const CLEAN_ADDRESS_1 = 'cleanAddress_1';

    const CLEAN_ADDRESS_2 = 'cleanAddress_2';

    const CLEAN_ADDRESS_3 = 'cleanAddress_3';

    const CLEAN_TOWN = 'cleanTown';

    const CLEAN_STATE = 'cleanState';

    const CLEAN_POSTAL_CODE = 'cleanPostalCode';

    const UPDRN = 'updrn';

    const OUTCOME = 'outcome';

    const RESPONSE_CODE = 'responseCode';

    const ERROR_DESCRIPTION = 'errorDescription';

    protected $_resourceType = ResourceType::GBR_POSTAL_ADDRESS_CLEAN_JOB;

    /**
     * @param \Arbor\Query\Query $query
     * @return GbrPostalAddressCleanJob[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("GbrPostalAddressCleanJob");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return GbrPostalAddressCleanJob
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GBR_POSTAL_ADDRESS_CLEAN_JOB, $id);
    }

    /**
     * @return PostalAddress
     */
    public function getPostalAddress()
    {
        return $this->getProperty("postalAddress");
    }

    /**
     * @param PostalAddress $postalAddress
     */
    public function setPostalAddress(PostalAddress $postalAddress = null)
    {
        $this->setProperty("postalAddress", $postalAddress);
    }

    /**
     * @return \DateTime
     */
    public function getExecutedDatetime()
    {
        return $this->getProperty("executedDatetime");
    }

    /**
     * @param \DateTime $executedDatetime
     */
    public function setExecutedDatetime(\DateTime $executedDatetime = null)
    {
        $this->setProperty("executedDatetime", $executedDatetime);
    }

    /**
     * @return string
     */
    public function getCleanAddress_1()
    {
        return $this->getProperty("cleanAddress_1");
    }

    /**
     * @param string $cleanAddress_1
     */
    public function setCleanAddress_1($cleanAddress_1 = null)
    {
        $this->setProperty("cleanAddress_1", $cleanAddress_1);
    }

    /**
     * @return string
     */
    public function getCleanAddress_2()
    {
        return $this->getProperty("cleanAddress_2");
    }

    /**
     * @param string $cleanAddress_2
     */
    public function setCleanAddress_2($cleanAddress_2 = null)
    {
        $this->setProperty("cleanAddress_2", $cleanAddress_2);
    }

    /**
     * @return string
     */
    public function getCleanAddress_3()
    {
        return $this->getProperty("cleanAddress_3");
    }

    /**
     * @param string $cleanAddress_3
     */
    public function setCleanAddress_3($cleanAddress_3 = null)
    {
        $this->setProperty("cleanAddress_3", $cleanAddress_3);
    }

    /**
     * @return string
     */
    public function getCleanTown()
    {
        return $this->getProperty("cleanTown");
    }

    /**
     * @param string $cleanTown
     */
    public function setCleanTown($cleanTown = null)
    {
        $this->setProperty("cleanTown", $cleanTown);
    }

    /**
     * @return string
     */
    public function getCleanState()
    {
        return $this->getProperty("cleanState");
    }

    /**
     * @param string $cleanState
     */
    public function setCleanState($cleanState = null)
    {
        $this->setProperty("cleanState", $cleanState);
    }

    /**
     * @return string
     */
    public function getCleanPostalCode()
    {
        return $this->getProperty("cleanPostalCode");
    }

    /**
     * @param string $cleanPostalCode
     */
    public function setCleanPostalCode($cleanPostalCode = null)
    {
        $this->setProperty("cleanPostalCode", $cleanPostalCode);
    }

    /**
     * @return int
     */
    public function getUpdrn()
    {
        return $this->getProperty("updrn");
    }

    /**
     * @param int $updrn
     */
    public function setUpdrn($updrn = null)
    {
        $this->setProperty("updrn", $updrn);
    }

    /**
     * @return string
     */
    public function getOutcome()
    {
        return $this->getProperty("outcome");
    }

    /**
     * @param string $outcome
     */
    public function setOutcome($outcome = null)
    {
        $this->setProperty("outcome", $outcome);
    }

    /**
     * @return int
     */
    public function getResponseCode()
    {
        return $this->getProperty("responseCode");
    }

    /**
     * @param int $responseCode
     */
    public function setResponseCode($responseCode = null)
    {
        $this->setProperty("responseCode", $responseCode);
    }

    /**
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->getProperty("errorDescription");
    }

    /**
     * @param string $errorDescription
     */
    public function setErrorDescription($errorDescription = null)
    {
        $this->setProperty("errorDescription", $errorDescription);
    }
}
