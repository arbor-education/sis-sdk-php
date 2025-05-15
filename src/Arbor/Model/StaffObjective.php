<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StaffObjective extends ModelBase
{
    public const STAFF = 'staff';

    public const APPRAISAL = 'appraisal';

    public const DESCRIPTION = 'description';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const CRITERIA = 'criteria';

    public const WEIGHTING = 'weighting';

    public const EVIDENCE = 'evidence';

    public const COMMENTS = 'comments';

    public const OUTCOME = 'outcome';

    protected $_resourceType = ResourceType::STAFF_OBJECTIVE;

    /**
     * @param Query $query
     * @return StaffObjective[] | Collection
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
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }

    /**
     * @return \Arbor\Model\Appraisal
     */
    public function getAppraisal()
    {
        return $this->getProperty('appraisal');
    }

    /**
     * @param \Arbor\Model\Appraisal $appraisal
     */
    public function setAppraisal(\Arbor\Model\Appraisal $appraisal = null)
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
    public function setDescription(string $description = null)
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
    public function setCriteria(string $criteria = null)
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
    public function setWeighting(string $weighting = null)
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
    public function setEvidence(string $evidence = null)
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
    public function setComments(string $comments = null)
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
    public function setOutcome(string $outcome = null)
    {
        $this->setProperty('outcome', $outcome);
    }
}
