<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ConsentType extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const CONSENT_TYPE_NAME = 'consentTypeName';

    const DESCRIPTION = 'description';

    const DEFAULT_DESCRIPTION = 'defaultDescription';

    const AUTO_REQUEST_FROM_GUARDIANS = 'autoRequestFromGuardians';

    const CONSENTED_BY_STUDENT = 'consentedByStudent';

    const CONSENTED_BY_GUARDIAN = 'consentedByGuardian';

    protected $_resourceType = ResourceType::CONSENT_TYPE;

    /**
     * @param Query $query
     * @return ConsentType[] | Collection
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

        $query->setResourceType(ResourceType::CONSENT_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ConsentType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CONSENT_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
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
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getConsentTypeName()
    {
        return $this->getProperty('consentTypeName');
    }

    /**
     * @param string $consentTypeName
     */
    public function setConsentTypeName($consentTypeName = null)
    {
        $this->setProperty('consentTypeName', $consentTypeName);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return string
     */
    public function getDefaultDescription()
    {
        return $this->getProperty('defaultDescription');
    }

    /**
     * @param string $defaultDescription
     */
    public function setDefaultDescription($defaultDescription = null)
    {
        $this->setProperty('defaultDescription', $defaultDescription);
    }

    /**
     * @return bool
     */
    public function getAutoRequestFromGuardians()
    {
        return $this->getProperty('autoRequestFromGuardians');
    }

    /**
     * @param bool $autoRequestFromGuardians
     */
    public function setAutoRequestFromGuardians($autoRequestFromGuardians = null)
    {
        $this->setProperty('autoRequestFromGuardians', $autoRequestFromGuardians);
    }

    /**
     * @return bool
     */
    public function getConsentedByStudent()
    {
        return $this->getProperty('consentedByStudent');
    }

    /**
     * @param bool $consentedByStudent
     */
    public function setConsentedByStudent($consentedByStudent = null)
    {
        $this->setProperty('consentedByStudent', $consentedByStudent);
    }

    /**
     * @return bool
     */
    public function getConsentedByGuardian()
    {
        return $this->getProperty('consentedByGuardian');
    }

    /**
     * @param bool $consentedByGuardian
     */
    public function setConsentedByGuardian($consentedByGuardian = null)
    {
        $this->setProperty('consentedByGuardian', $consentedByGuardian);
    }


}
