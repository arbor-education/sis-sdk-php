<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class NewReportCardText extends ModelBase
{
    public const NEW_REPORT_CARD_BATCH = 'newReportCardBatch';

    public const TITLE = 'title';

    public const POSITION = 'position';

    public const BODY = 'body';

    protected $_resourceType = ResourceType::NEW_REPORT_CARD_TEXT;

    /**
     * @param Query $query
     * @return NewReportCardText[] | Collection
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

        $query->setResourceType(ResourceType::NEW_REPORT_CARD_TEXT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return NewReportCardText
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::NEW_REPORT_CARD_TEXT, $id);
    }

    /**
     * @return \Arbor\Model\NewReportCardBatch
     */
    public function getNewReportCardBatch()
    {
        return $this->getProperty('newReportCardBatch');
    }

    /**
     * @param \Arbor\Model\NewReportCardBatch $newReportCardBatch
     */
    public function setNewReportCardBatch(\Arbor\Model\NewReportCardBatch $newReportCardBatch = null)
    {
        $this->setProperty('newReportCardBatch', $newReportCardBatch);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->getProperty('position');
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position = null)
    {
        $this->setProperty('position', $position);
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->getProperty('body');
    }

    /**
     * @param string $body
     */
    public function setBody(string $body = null)
    {
        $this->setProperty('body', $body);
    }
}
