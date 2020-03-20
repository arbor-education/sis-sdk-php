<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class FailedImapImport extends ModelBase
{

    const UID = 'uid';

    const REASON = 'reason';

    protected $_resourceType = ResourceType::FAILED_IMAP_IMPORT;

    /**
     * @param Query $query
     * @return FailedImapImport[] | Collection
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

        $query->setResourceType(ResourceType::FAILED_IMAP_IMPORT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return FailedImapImport
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::FAILED_IMAP_IMPORT, $id);
    }

    /**
     * @return int
     */
    public function getUid()
    {
        return $this->getProperty('uid');
    }

    /**
     * @param int $uid
     */
    public function setUid($uid = null)
    {
        $this->setProperty('uid', $uid);
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->getProperty('reason');
    }

    /**
     * @param string $reason
     */
    public function setReason($reason = null)
    {
        $this->setProperty('reason', $reason);
    }


}
