<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StaffObjective extends ModelBase
{
    const STAFF = 'staff';

    const APPRAISAL = 'appraisal';

    const DESCRIPTION = 'description';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const CRITERIA = 'criteria';

    const WEIGHTING = 'weighting';

    const EVIDENCE = 'evidence';

    const COMMENTS = 'comments';

    const OUTCOME = 'outcome';

    protected $_resourceType = ResourceType::STAFF_OBJECTIVE;

    /**
     * @param Query $query
     * @return StaffObjective[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_OBJECTIVE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffObjective
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_OBJECTIVE, $id);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return Appraisal
     */
    public function getAppraisal()
    {
        return $this->getProperty('appraisal');
    }

    /**
     * @param Appraisal $appraisal
     */
    public function setAppraisal(Appraisal $appraisal = null)
    {
        $this->setProperty('appraisal', $appraisal);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getCriteria()
    {
        return $this->getProperty('criteria');
    }

    /**
     * @param string $criteria
     */
    public function setCriteria($criteria = null)
    {
        $this->setProperty('criteria', $criteria);
    }

    /**
     * @return string
     */
    public function getWeighting()
    {
        return $this->getProperty('weighting');
    }

    /**
     * @param string $weighting
     */
    public function setWeighting($weighting = null)
    {
        $this->setProperty('weighting', $weighting);
    }

    /**
     * @return string
     */
    public function getEvidence()
    {
        return $this->getProperty('evidence');
    }

    /**
     * @param string $evidence
     */
    public function setEvidence($evidence = null)
    {
        $this->setProperty('evidence', $evidence);
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->getProperty('comments');
    }

    /**
     * @param string $comments
     */
    public function setComments($comments = null)
    {
        $this->setProperty('comments', $comments);
    }

    /**
     * @return string
     */
    public function getOutcome()
    {
        return $this->getProperty('outcome');
    }

    /**
     * @param string $outcome
     */
    public function setOutcome($outcome = null)
    {
        $this->setProperty('outcome', $outcome);
    }

}
