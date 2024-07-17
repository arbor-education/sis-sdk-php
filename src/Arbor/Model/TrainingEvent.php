<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class TrainingEvent extends ModelBase
{
    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const LOCATION_TEXT = 'locationText';

    public const LOCATION = 'location';

    public const TRAINING_EVENT_TITLE = 'trainingEventTitle';

    public const EXPIRY_DATE = 'expiryDate';

    public const TRAINING_COURSE = 'trainingCourse';

    protected $_resourceType = ResourceType::TRAINING_EVENT;

    /**
     * @param Query $query
     * @return TrainingEvent[] | Collection
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

        $query->setResourceType(ResourceType::TRAINING_EVENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TrainingEvent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TRAINING_EVENT, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
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

    /**
     * @return string
     */
    public function getLocationText()
    {
        return $this->getProperty('locationText');
    }

    /**
     * @param string $locationText
     */
    public function setLocationText(string $locationText = null)
    {
        $this->setProperty('locationText', $locationText);
    }

    /**
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(\ModelBase $location = null)
    {
        $this->setProperty('location', $location);
    }

    /**
     * @return string
     */
    public function getTrainingEventTitle()
    {
        return $this->getProperty('trainingEventTitle');
    }

    /**
     * @param string $trainingEventTitle
     */
    public function setTrainingEventTitle(string $trainingEventTitle = null)
    {
        $this->setProperty('trainingEventTitle', $trainingEventTitle);
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->getProperty('expiryDate');
    }

    /**
     * @param \DateTime $expiryDate
     */
    public function setExpiryDate(\DateTime $expiryDate = null)
    {
        $this->setProperty('expiryDate', $expiryDate);
    }

    /**
     * @return \Arbor\Model\TrainingCourse
     */
    public function getTrainingCourse()
    {
        return $this->getProperty('trainingCourse');
    }

    /**
     * @param \Arbor\Model\TrainingCourse $trainingCourse
     */
    public function setTrainingCourse(\Arbor\Model\TrainingCourse $trainingCourse = null)
    {
        $this->setProperty('trainingCourse', $trainingCourse);
    }
}
