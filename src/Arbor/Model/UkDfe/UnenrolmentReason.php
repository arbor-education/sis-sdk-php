<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class UnenrolmentReason extends ModelBase
{

    const D00206 = 'd00206';

    protected $_resourceType = ResourceType::UK_DFE_UNENROLMENT_REASON;

    /**
     * @param Query $query
     * @return UnenrolmentReason[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_UNENROLMENT_REASON);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UnenrolmentReason
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_UNENROLMENT_REASON, $id);
    }

    /**
     * @return string
     */
    public function getD00206()
    {
        return $this->getProperty('d00206');
    }

    /**
     * @param string $d00206
     */
    public function setD00206($d00206 = null)
    {
        $this->setProperty('d00206', $d00206);
    }


}
