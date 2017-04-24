<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\TrainingCourse;

class PersonTrainingCourse extends ModelBase
{
    const TRAINING_COURSE = 'trainingCourse';

    const TRAINED_PERSON = 'trainedPerson';

    const FEE_COSTS = 'feeCosts';

    protected $_resourceType = ResourceType::PERSON_TRAINING_COURSE;

    /**
     * @param \Arbor\Query\Query $query
     * @return PersonTrainingCourse[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("PersonTrainingCourse");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return PersonTrainingCourse
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PERSON_TRAINING_COURSE, $id);
    }

    /**
     * @return TrainingCourse
     */
    public function getTrainingCourse()
    {
        return $this->getProperty("trainingCourse");
    }

    /**
     * @param TrainingCourse $trainingCourse
     */
    public function setTrainingCourse(TrainingCourse $trainingCourse = null)
    {
        $this->setProperty("trainingCourse", $trainingCourse);
    }

    /**
     * @return ModelBase
     */
    public function getTrainedPerson()
    {
        return $this->getProperty("trainedPerson");
    }

    /**
     * @param ModelBase $trainedPerson
     */
    public function setTrainedPerson(ModelBase $trainedPerson = null)
    {
        $this->setProperty("trainedPerson", $trainedPerson);
    }

    /**
     * @return float
     */
    public function getFeeCosts()
    {
        return $this->getProperty("feeCosts");
    }

    /**
     * @param float $feeCosts
     */
    public function setFeeCosts($feeCosts = null)
    {
        $this->setProperty("feeCosts", $feeCosts);
    }
}
