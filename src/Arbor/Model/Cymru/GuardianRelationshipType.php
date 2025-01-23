<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class GuardianRelationshipType extends ModelBase
{
    public const RELATIONSHIP_CODE = 'relationshipCode';

    public const EXTENDED_CODE = 'extendedCode';

    public const CTF_EXPORT_CODE = 'ctfExportCode';

    protected $_resourceType = ResourceType::CYMRU_GUARDIAN_RELATIONSHIP_TYPE;

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

        $query->setResourceType(ResourceType::CYMRU_GUARDIAN_RELATIONSHIP_TYPE);

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

        return $gateway->retrieve(ResourceType::CYMRU_GUARDIAN_RELATIONSHIP_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getRelationshipCode()
    {
        return $this->getProperty('relationshipCode');
    }

    /**
     * @param string $relationshipCode
     */
    public function setRelationshipCode(string $relationshipCode = null)
    {
        $this->setProperty('relationshipCode', $relationshipCode);
    }

    /**
     * @return string
     */
    public function getExtendedCode()
    {
        return $this->getProperty('extendedCode');
    }

    /**
     * @param string $extendedCode
     */
    public function setExtendedCode(string $extendedCode = null)
    {
        $this->setProperty('extendedCode', $extendedCode);
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
