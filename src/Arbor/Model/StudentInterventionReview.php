<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentInterventionReview extends ModelBase
{
    const STUDENT_INTERVENTION = 'studentIntervention';

    const INTERVENTION_REVIEW = 'interventionReview';

    const REVIEW = 'review';

    protected $_resourceType = ResourceType::STUDENT_INTERVENTION_REVIEW;

    /**
     * @param Query $query
     * @return StudentInterventionReview[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_INTERVENTION_REVIEW);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentInterventionReview
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_INTERVENTION_REVIEW, $id);
    }

    /**
     * @return StudentIntervention
     */
    public function getStudentIntervention()
    {
        return $this->getProperty('studentIntervention');
    }

    /**
     * @param StudentIntervention $studentIntervention
     */
    public function setStudentIntervention(StudentIntervention $studentIntervention = null)
    {
        $this->setProperty('studentIntervention', $studentIntervention);
    }

    /**
     * @return InterventionReview
     */
    public function getInterventionReview()
    {
        return $this->getProperty('interventionReview');
    }

    /**
     * @param InterventionReview $interventionReview
     */
    public function setInterventionReview(InterventionReview $interventionReview = null)
    {
        $this->setProperty('interventionReview', $interventionReview);
    }

    /**
     * @return string
     */
    public function getReview()
    {
        return $this->getProperty('review');
    }

    /**
     * @param string $review
     */
    public function setReview($review = null)
    {
        $this->setProperty('review', $review);
    }
}
