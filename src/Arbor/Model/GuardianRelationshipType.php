<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class GuardianRelationshipType extends ModelBase
{
    const D00033 = 'd00033';

    const D00034 = 'd00034';

    const CTF_EXPORT_CODE = 'ctfExportCode';

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const RELATIONSHIP_NAME = 'relationshipName';

    const SHORT_NAME = 'shortName';

    const IS_MALE = 'isMale';

    const IS_FEMALE = 'isFemale';

    const IS_SIBLING = 'isSibling';

    protected $_resourceType = ResourceType::GUARDIAN_RELATIONSHIP_TYPE;

    /**
     * @param \Arbor\Query\Query $query
     * @return GuardianRelationshipType[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("GuardianRelationshipType");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return GuardianRelationshipType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GUARDIAN_RELATIONSHIP_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getD00033()
    {
        return $this->getProperty("d00033");
    }

    /**
     * @param string $d00033
     */
    public function setD00033($d00033 = null)
    {
        $this->setProperty("d00033", $d00033);
    }

    /**
     * @return string
     */
    public function getD00034()
    {
        return $this->getProperty("d00034");
    }

    /**
     * @param string $d00034
     */
    public function setD00034($d00034 = null)
    {
        $this->setProperty("d00034", $d00034);
    }

    /**
     * @return string
     */
    public function getCtfExportCode()
    {
        return $this->getProperty("ctfExportCode");
    }

    /**
     * @param string $ctfExportCode
     */
    public function setCtfExportCode($ctfExportCode = null)
    {
        $this->setProperty("ctfExportCode", $ctfExportCode);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return string
     */
    public function getRelationshipName()
    {
        return $this->getProperty("relationshipName");
    }

    /**
     * @param string $relationshipName
     */
    public function setRelationshipName($relationshipName = null)
    {
        $this->setProperty("relationshipName", $relationshipName);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty("shortName");
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty("shortName", $shortName);
    }

    /**
     * @return bool
     */
    public function getIsMale()
    {
        return $this->getProperty("isMale");
    }

    /**
     * @param bool $isMale
     */
    public function setIsMale($isMale = null)
    {
        $this->setProperty("isMale", $isMale);
    }

    /**
     * @return bool
     */
    public function getIsFemale()
    {
        return $this->getProperty("isFemale");
    }

    /**
     * @param bool $isFemale
     */
    public function setIsFemale($isFemale = null)
    {
        $this->setProperty("isFemale", $isFemale);
    }

    /**
     * @return bool
     */
    public function getIsSibling()
    {
        return $this->getProperty("isSibling");
    }

    /**
     * @param bool $isSibling
     */
    public function setIsSibling($isSibling = null)
    {
        $this->setProperty("isSibling", $isSibling);
    }
}
