<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Language extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const LABEL = 'label';

    public const ISO6391_ALPHA2 = 'iso6391Alpha2';

    public const ISO6392_ALPHA3 = 'iso6392Alpha3';

    public const ISO6392_ALPHA3_TERMINOLOGY = 'iso6392Alpha3Terminology';

    public const PARENT_CODE = 'parentCode';

    public const D00011_ALPHA3 = 'd00011Alpha3';

    public const D00011_ALPHA4 = 'd00011Alpha4';

    protected $_resourceType = ResourceType::LANGUAGE;

    /**
     * @param Query $query
     * @return Language[] | Collection
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

        $query->setResourceType(ResourceType::LANGUAGE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Language
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::LANGUAGE, $id);
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
    public function getLabel()
    {
        return $this->getProperty('label');
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label = null)
    {
        $this->setProperty('label', $label);
    }

    /**
     * @return string
     */
    public function getIso6391Alpha2()
    {
        return $this->getProperty('iso6391Alpha2');
    }

    /**
     * @param string $iso6391Alpha2
     */
    public function setIso6391Alpha2(string $iso6391Alpha2 = null)
    {
        $this->setProperty('iso6391Alpha2', $iso6391Alpha2);
    }

    /**
     * @return string
     */
    public function getIso6392Alpha3()
    {
        return $this->getProperty('iso6392Alpha3');
    }

    /**
     * @param string $iso6392Alpha3
     */
    public function setIso6392Alpha3(string $iso6392Alpha3 = null)
    {
        $this->setProperty('iso6392Alpha3', $iso6392Alpha3);
    }

    /**
     * @return string
     */
    public function getIso6392Alpha3Terminology()
    {
        return $this->getProperty('iso6392Alpha3Terminology');
    }

    /**
     * @param string $iso6392Alpha3Terminology
     */
    public function setIso6392Alpha3Terminology(string $iso6392Alpha3Terminology = null)
    {
        $this->setProperty('iso6392Alpha3Terminology', $iso6392Alpha3Terminology);
    }

    /**
     * @return string
     */
    public function getParentCode()
    {
        return $this->getProperty('parentCode');
    }

    /**
     * @param string $parentCode
     */
    public function setParentCode(string $parentCode = null)
    {
        $this->setProperty('parentCode', $parentCode);
    }

    /**
     * @return string
     */
    public function getD00011Alpha3()
    {
        return $this->getProperty('d00011Alpha3');
    }

    /**
     * @param string $d00011Alpha3
     */
    public function setD00011Alpha3(string $d00011Alpha3 = null)
    {
        $this->setProperty('d00011Alpha3', $d00011Alpha3);
    }

    /**
     * @return string
     */
    public function getD00011Alpha4()
    {
        return $this->getProperty('d00011Alpha4');
    }

    /**
     * @param string $d00011Alpha4
     */
    public function setD00011Alpha4(string $d00011Alpha4 = null)
    {
        $this->setProperty('d00011Alpha4', $d00011Alpha4);
    }
}
