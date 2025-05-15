<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Notice extends ModelBase
{
    public const NOTICE_HTML = 'noticeHtml';

    public const NOTICE_DATETIME = 'noticeDatetime';

    public const END_DATETIME = 'endDatetime';

    protected $_resourceType = ResourceType::NOTICE;

    /**
     * @param Query $query
     * @return Notice[] | Collection
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

        $query->setResourceType(ResourceType::NOTICE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Notice
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::NOTICE, $id);
    }

    /**
     * @return string
     */
    public function getNoticeHtml()
    {
        return $this->getProperty('noticeHtml');
    }

    /**
     * @param string $noticeHtml
     */
    public function setNoticeHtml(string $noticeHtml = null)
    {
        $this->setProperty('noticeHtml', $noticeHtml);
    }

    /**
     * @return \DateTime
     */
    public function getNoticeDatetime()
    {
        return $this->getProperty('noticeDatetime');
    }

    /**
     * @param \DateTime $noticeDatetime
     */
    public function setNoticeDatetime(\DateTime $noticeDatetime = null)
    {
        $this->setProperty('noticeDatetime', $noticeDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }
}
