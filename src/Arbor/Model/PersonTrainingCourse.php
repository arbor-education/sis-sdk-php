<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PersonTrainingCourse extends ModelBase
{
    const TRAINING_COURSE = 'trainingCourse';

    const TRAINED_PERSON = 'trainedPerson';

    const FEE_COSTS = 'feeCosts';

    protected $_resourceType = ResourceType::PERSON_TRAINING_COURSE;

    /**
     * @param Query $query
     * @return PersonTrainingCourse[] | Collection
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

        $query->setResourceType(ResourceType::PERSON_TRAINING_COURSE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PersonTrainingCourse
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PERSON_TRAINING_COURSE, $id);
    }

    /**
     * @return TrainingCourse
     */
    public function getTrainingCourse()
    {
        return $this->getProperty('trainingCourse');
    }

    /**
     * @param TrainingCourse $trainingCourse
     */
    public function setTrainingCourse(TrainingCourse $trainingCourse = null)
    {
        $this->setProperty('trainingCourse', $trainingCourse);
    }

    /**
     * @return ModelBase
     */
    public function getTrainedPerson()
    {
        return $this->getProperty('trainedPerson');
    }

    /**
     * @param ModelBase $trainedPerson
     */
    public function setTrainedPerson(ModelBase $trainedPerson = null)
    {
        $this->setProperty('trainedPerson', $trainedPerson);
    }

    /**
     * @return float
     */
    public function getFeeCosts()
    {
        return $this->getProperty('feeCosts');
    }

    /**
     * @param float $feeCosts
     */
    public function setFeeCosts($feeCosts = null)
    {
        $this->setProperty('feeCosts', $feeCosts);
    }
}
