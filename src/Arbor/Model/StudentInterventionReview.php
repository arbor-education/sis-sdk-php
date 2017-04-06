<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\StudentIntervention;
use \Arbor\Model\InterventionReview;

class StudentInterventionReview extends ModelBase
{

    const STUDENT_INTERVENTION = 'studentIntervention';

    const INTERVENTION_REVIEW = 'interventionReview';

    const REVIEW = 'review';

    protected $_resourceType = ResourceType::STUDENT_INTERVENTION_REVIEW;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentInterventionReview[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("StudentInterventionReview");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentInterventionReview
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STUDENT_INTERVENTION_REVIEW, $id);
    }

    /**
     * @return StudentIntervention
     */
    public function getStudentIntervention()
    {
        return $this->getProperty("studentIntervention");
    }

    /**
     * @param StudentIntervention $studentIntervention
     */
    public function setStudentIntervention(StudentIntervention $studentIntervention = null)
    {
        $this->setProperty("studentIntervention", $studentIntervention);
    }

    /**
     * @return InterventionReview
     */
    public function getInterventionReview()
    {
        return $this->getProperty("interventionReview");
    }

    /**
     * @param InterventionReview $interventionReview
     */
    public function setInterventionReview(InterventionReview $interventionReview = null)
    {
        $this->setProperty("interventionReview", $interventionReview);
    }

    /**
     * @return string
     */
    public function getReview()
    {
        return $this->getProperty("review");
    }

    /**
     * @param string $review
     */
    public function setReview($review = null)
    {
        $this->setProperty("review", $review);
    }


}
