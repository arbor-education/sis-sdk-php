<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Notice extends ModelBase
{

    const NOTICE_HTML = 'noticeHtml';

    const NOTICE_DATETIME = 'noticeDatetime';

    const END_DATETIME = 'endDatetime';

    protected $_resourceType = ResourceType::NOTICE;

    /**
     * @param \Arbor\Query\Query $query
     * @return Notice[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Notice");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Notice
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::NOTICE, $id);
    }

    /**
     * @return string
     */
    public function getNoticeHtml()
    {
        return $this->getProperty("noticeHtml");
    }

    /**
     * @param string $noticeHtml
     */
    public function setNoticeHtml($noticeHtml = null)
    {
        $this->setProperty("noticeHtml", $noticeHtml);
    }

    /**
     * @return \DateTime
     */
    public function getNoticeDatetime()
    {
        return $this->getProperty("noticeDatetime");
    }

    /**
     * @param \DateTime $noticeDatetime
     */
    public function setNoticeDatetime(\DateTime $noticeDatetime = null)
    {
        $this->setProperty("noticeDatetime", $noticeDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty("endDatetime");
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty("endDatetime", $endDatetime);
    }


}
