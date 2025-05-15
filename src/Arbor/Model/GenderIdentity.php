<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class GenderIdentity extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const SHORT_NAME = 'shortName';

    public const LONG_NAME = 'longName';

    public const EXPORT_CODE = 'exportCode';

    protected $_resourceType = ResourceType::GENDER_IDENTITY;

    /**
     * @param Query $query
     * @return GenderIdentity[] | Collection
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

        $query->setResourceType(ResourceType::GENDER_IDENTITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return GenderIdentity
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GENDER_IDENTITY, $id);
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
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return string
     */
    public function getLongName()
    {
        return $this->getProperty('longName');
    }

    /**
     * @param string $longName
     */
    public function setLongName(string $longName = null)
    {
        $this->setProperty('longName', $longName);
    }

    /**
     * @return string
     */
    public function getExportCode()
    {
        return $this->getProperty('exportCode');
    }

    /**
     * @param string $exportCode
     */
    public function setExportCode(string $exportCode = null)
    {
        $this->setProperty('exportCode', $exportCode);
    }
}
