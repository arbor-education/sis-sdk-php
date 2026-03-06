<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AiInteraction extends ModelBase
{
    public const TYPE = 'type';

    public const IDENTIFIER = 'identifier';

    public const FEATURE_CODE = 'featureCode';

    public const TITLE = 'title';

    public const COST = 'cost';

    public const CHAT_LENGTH = 'chatLength';

    public const MODERATION_ALERT = 'moderationAlert';

    public const REVIEW_ASSIGNED_TO_STAFF = 'reviewAssignedToStaff';

    public const REVIEW_ASSIGNED_DATETIME = 'reviewAssignedDatetime';

    public const REVIEWED_BY_STAFF = 'reviewedByStaff';

    public const REVIEWED_DATETIME = 'reviewedDatetime';

    public const IS_ARCHIVED = 'isArchived';

    protected $_resourceType = ResourceType::AI_INTERACTION;

    /**
     * @param Query $query
     * @return AiInteraction[] | Collection
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

        $query->setResourceType(ResourceType::AI_INTERACTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AiInteraction
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::AI_INTERACTION, $id);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * @param string $type
     */
    public function setType(string $type = null)
    {
        $this->setProperty('type', $type);
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->getProperty('identifier');
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier(string $identifier = null)
    {
        $this->setProperty('identifier', $identifier);
    }

    /**
     * @return string
     */
    public function getFeatureCode()
    {
        return $this->getProperty('featureCode');
    }

    /**
     * @param string $featureCode
     */
    public function setFeatureCode(string $featureCode = null)
    {
        $this->setProperty('featureCode', $featureCode);
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
    public function getCost()
    {
        return $this->getProperty('cost');
    }

    /**
     * @param string $cost
     */
    public function setCost(string $cost = null)
    {
        $this->setProperty('cost', $cost);
    }

    /**
     * @return int
     */
    public function getChatLength()
    {
        return $this->getProperty('chatLength');
    }

    /**
     * @param int $chatLength
     */
    public function setChatLength(int $chatLength = null)
    {
        $this->setProperty('chatLength', $chatLength);
    }

    /**
     * @return bool
     */
    public function getModerationAlert()
    {
        return $this->getProperty('moderationAlert');
    }

    /**
     * @param bool $moderationAlert
     */
    public function setModerationAlert(bool $moderationAlert = null)
    {
        $this->setProperty('moderationAlert', $moderationAlert);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getReviewAssignedToStaff()
    {
        return $this->getProperty('reviewAssignedToStaff');
    }

    /**
     * @param \Arbor\Model\Staff $reviewAssignedToStaff
     */
    public function setReviewAssignedToStaff(\Arbor\Model\Staff $reviewAssignedToStaff = null)
    {
        $this->setProperty('reviewAssignedToStaff', $reviewAssignedToStaff);
    }

    /**
     * @return \DateTime
     */
    public function getReviewAssignedDatetime()
    {
        return $this->getProperty('reviewAssignedDatetime');
    }

    /**
     * @param \DateTime $reviewAssignedDatetime
     */
    public function setReviewAssignedDatetime(\DateTime $reviewAssignedDatetime = null)
    {
        $this->setProperty('reviewAssignedDatetime', $reviewAssignedDatetime);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getReviewedByStaff()
    {
        return $this->getProperty('reviewedByStaff');
    }

    /**
     * @param \Arbor\Model\Staff $reviewedByStaff
     */
    public function setReviewedByStaff(\Arbor\Model\Staff $reviewedByStaff = null)
    {
        $this->setProperty('reviewedByStaff', $reviewedByStaff);
    }

    /**
     * @return \DateTime
     */
    public function getReviewedDatetime()
    {
        return $this->getProperty('reviewedDatetime');
    }

    /**
     * @param \DateTime $reviewedDatetime
     */
    public function setReviewedDatetime(\DateTime $reviewedDatetime = null)
    {
        $this->setProperty('reviewedDatetime', $reviewedDatetime);
    }

    /**
     * @return bool
     */
    public function getIsArchived()
    {
        return $this->getProperty('isArchived');
    }

    /**
     * @param bool $isArchived
     */
    public function setIsArchived(bool $isArchived = null)
    {
        $this->setProperty('isArchived', $isArchived);
    }
}
