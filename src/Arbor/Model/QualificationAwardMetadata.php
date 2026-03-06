<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationAwardMetadata extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const QUALIFICATION_AWARD = 'qualificationAward';

    public const COUNTRY_CODE = 'countryCode';

    public const METADATA_NAME = 'metadataName';

    public const METADATA_VALUE = 'metadataValue';

    protected $_resourceType = ResourceType::QUALIFICATION_AWARD_METADATA;

    /**
     * @param Query $query
     * @return QualificationAwardMetadata[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_AWARD_METADATA);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationAwardMetadata
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_AWARD_METADATA, $id);
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
     * @return \Arbor\Model\QualificationAward
     */
    public function getQualificationAward()
    {
        return $this->getProperty('qualificationAward');
    }

    /**
     * @param \Arbor\Model\QualificationAward $qualificationAward
     */
    public function setQualificationAward(\Arbor\Model\QualificationAward $qualificationAward = null)
    {
        $this->setProperty('qualificationAward', $qualificationAward);
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->getProperty('countryCode');
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode = null)
    {
        $this->setProperty('countryCode', $countryCode);
    }

    /**
     * @return string
     */
    public function getMetadataName()
    {
        return $this->getProperty('metadataName');
    }

    /**
     * @param string $metadataName
     */
    public function setMetadataName(string $metadataName = null)
    {
        $this->setProperty('metadataName', $metadataName);
    }

    /**
     * @return string
     */
    public function getMetadataValue()
    {
        return $this->getProperty('metadataValue');
    }

    /**
     * @param string $metadataValue
     */
    public function setMetadataValue(string $metadataValue = null)
    {
        $this->setProperty('metadataValue', $metadataValue);
    }
}
