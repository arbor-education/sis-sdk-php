<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class ExclusionReason extends ModelBase
{

    const D00024 = 'd00024';

    protected $_resourceType = ResourceType::UK_DFE_EXCLUSION_REASON;

    /**
     * @param Query $query
     * @return ExclusionReason[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_EXCLUSION_REASON);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ExclusionReason
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_EXCLUSION_REASON, $id);
    }

    /**
     * @return string
     */
    public function getD00024()
    {
        return $this->getProperty('d00024');
    }

    /**
     * @param string $d00024
     */
    public function setD00024($d00024 = null)
    {
        $this->setProperty('d00024', $d00024);
    }


}
