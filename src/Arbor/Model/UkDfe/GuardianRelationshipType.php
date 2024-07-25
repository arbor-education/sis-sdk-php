<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class GuardianRelationshipType extends ModelBase
{
    public const D00033 = 'd00033';

    public const D00034 = 'd00034';

    public const CTF_EXPORT_CODE = 'ctfExportCode';

    protected $_resourceType = ResourceType::UK_DFE_GUARDIAN_RELATIONSHIP_TYPE;

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

        $query->setResourceType(ResourceType::UK_DFE_GUARDIAN_RELATIONSHIP_TYPE);

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

        return $gateway->retrieve(ResourceType::UK_DFE_GUARDIAN_RELATIONSHIP_TYPE, $id);
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
