<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CheckType extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const CHECK_NAME = 'checkName';

    public const IS_REQUESTED = 'isRequested';

    public const HAS_EXPIRY_DATE = 'hasExpiryDate';

    public const HAS_REFERENCE_NUMBER = 'hasReferenceNumber';

    public const EVIDENCE_REQUIRED = 'evidenceRequired';

    public const RELATED_ENTITY_TYPE = 'relatedEntityType';

    public const REQUEST_FROM_ALL_STAFF = 'requestFromAllStaff';

    public const REQUEST_FROM_TEACHING_STAFF = 'requestFromTeachingStaff';

    protected $_resourceType = ResourceType::CHECK_TYPE;

    /**
     * @param Query $query
     * @return CheckType[] | Collection
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

        $query->setResourceType(ResourceType::CHECK_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CheckType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CHECK_TYPE, $id);
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
    public function setCode(string $code = null)
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
    public function setActive(bool $active = null)
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
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getCheckName()
    {
        return $this->getProperty('checkName');
    }

    /**
     * @param string $checkName
     */
    public function setCheckName(string $checkName = null)
    {
        $this->setProperty('checkName', $checkName);
    }

    /**
     * @return bool
     */
    public function getIsRequested()
    {
        return $this->getProperty('isRequested');
    }

    /**
     * @param bool $isRequested
     */
    public function setIsRequested(bool $isRequested = null)
    {
        $this->setProperty('isRequested', $isRequested);
    }

    /**
     * @return bool
     */
    public function getHasExpiryDate()
    {
        return $this->getProperty('hasExpiryDate');
    }

    /**
     * @param bool $hasExpiryDate
     */
    public function setHasExpiryDate(bool $hasExpiryDate = null)
    {
        $this->setProperty('hasExpiryDate', $hasExpiryDate);
    }

    /**
     * @return bool
     */
    public function getHasReferenceNumber()
    {
        return $this->getProperty('hasReferenceNumber');
    }

    /**
     * @param bool $hasReferenceNumber
     */
    public function setHasReferenceNumber(bool $hasReferenceNumber = null)
    {
        $this->setProperty('hasReferenceNumber', $hasReferenceNumber);
    }

    /**
     * @return bool
     */
    public function getEvidenceRequired()
    {
        return $this->getProperty('evidenceRequired');
    }

    /**
     * @param bool $evidenceRequired
     */
    public function setEvidenceRequired(bool $evidenceRequired = null)
    {
        $this->setProperty('evidenceRequired', $evidenceRequired);
    }

    /**
     * @return string
     */
    public function getRelatedEntityType()
    {
        return $this->getProperty('relatedEntityType');
    }

    /**
     * @param string $relatedEntityType
     */
    public function setRelatedEntityType(string $relatedEntityType = null)
    {
        $this->setProperty('relatedEntityType', $relatedEntityType);
    }

    /**
     * @return string
     */
    public function getRequestFromAllStaff()
    {
        return $this->getProperty('requestFromAllStaff');
    }

    /**
     * @param string $requestFromAllStaff
     */
    public function setRequestFromAllStaff(string $requestFromAllStaff = null)
    {
        $this->setProperty('requestFromAllStaff', $requestFromAllStaff);
    }

    /**
     * @return string
     */
    public function getRequestFromTeachingStaff()
    {
        return $this->getProperty('requestFromTeachingStaff');
    }

    /**
     * @param string $requestFromTeachingStaff
     */
    public function setRequestFromTeachingStaff(string $requestFromTeachingStaff = null)
    {
        $this->setProperty('requestFromTeachingStaff', $requestFromTeachingStaff);
    }
}
