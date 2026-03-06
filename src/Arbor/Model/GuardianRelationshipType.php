<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class GuardianRelationshipType extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const RELATIONSHIP_NAME = 'relationshipName';

    public const SHORT_NAME = 'shortName';

    public const IS_MALE = 'isMale';

    public const IS_FEMALE = 'isFemale';

    public const IS_SIBLING = 'isSibling';

    public const EXPORT_CODE = 'exportCode';

    public const D00033 = 'd00033';

    public const D00034 = 'd00034';

    public const CTF_EXPORT_CODE = 'ctfExportCode';

    protected $_resourceType = ResourceType::GUARDIAN_RELATIONSHIP_TYPE;

    /**
     * @param Query $query
     * @return GuardianRelationshipType[] | Collection
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

        $query->setResourceType(ResourceType::GUARDIAN_RELATIONSHIP_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return GuardianRelationshipType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GUARDIAN_RELATIONSHIP_TYPE, $id);
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
    public function getRelationshipName()
    {
        return $this->getProperty('relationshipName');
    }

    /**
     * @param string $relationshipName
     */
    public function setRelationshipName(string $relationshipName = null)
    {
        $this->setProperty('relationshipName', $relationshipName);
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
     * @return bool
     */
    public function getIsMale()
    {
        return $this->getProperty('isMale');
    }

    /**
     * @param bool $isMale
     */
    public function setIsMale(bool $isMale = null)
    {
        $this->setProperty('isMale', $isMale);
    }

    /**
     * @return bool
     */
    public function getIsFemale()
    {
        return $this->getProperty('isFemale');
    }

    /**
     * @param bool $isFemale
     */
    public function setIsFemale(bool $isFemale = null)
    {
        $this->setProperty('isFemale', $isFemale);
    }

    /**
     * @return bool
     */
    public function getIsSibling()
    {
        return $this->getProperty('isSibling');
    }

    /**
     * @param bool $isSibling
     */
    public function setIsSibling(bool $isSibling = null)
    {
        $this->setProperty('isSibling', $isSibling);
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

    /**
     * @return string
     */
    public function getD00033()
    {
        return $this->getProperty('d00033');
    }

    /**
     * @param string $d00033
     */
    public function setD00033(string $d00033 = null)
    {
        $this->setProperty('d00033', $d00033);
    }

    /**
     * @return string
     */
    public function getD00034()
    {
        return $this->getProperty('d00034');
    }

    /**
     * @param string $d00034
     */
    public function setD00034(string $d00034 = null)
    {
        $this->setProperty('d00034', $d00034);
    }

    /**
     * @return string
     */
    public function getCtfExportCode()
    {
        return $this->getProperty('ctfExportCode');
    }

    /**
     * @param string $ctfExportCode
     */
    public function setCtfExportCode(string $ctfExportCode = null)
    {
        $this->setProperty('ctfExportCode', $ctfExportCode);
    }
}
