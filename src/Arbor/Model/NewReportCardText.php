<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class NewReportCardText extends ModelBase
{
    const NEW_REPORT_CARD_BATCH = 'newReportCardBatch';

    const TITLE = 'title';

    const POSITION = 'position';

    const BODY = 'body';

    protected $_resourceType = ResourceType::NEW_REPORT_CARD_TEXT;

    /**
     * @param Query $query
     * @return NewReportCardText[] | Collection
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
     * @return NewReportCardBatch
     */
    public function getNewReportCardBatch()
    {
        return $this->getProperty('newReportCardBatch');
    }

    /**
     * @param NewReportCardBatch $newReportCardBatch
     */
    public function setNewReportCardBatch(NewReportCardBatch $newReportCardBatch = null)
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
    public function setTitle($title = null)
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
    public function setPosition($position = null)
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
    public function setBody($body = null)
    {
        $this->setProperty('body', $body);
    }
}
