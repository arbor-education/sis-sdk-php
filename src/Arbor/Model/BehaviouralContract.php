<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;

class BehaviouralContract extends ModelBase
{

    const BEHAVIOURAL_CONTRACT_TITLE = 'behaviouralContractTitle';

    const STUDENT = 'student';

    const NARRATIVE = 'narrative';

    const CONTRACT_START_DATE = 'contractStartDate';

    const CONTRACT_END_DATE = 'contractEndDate';

    const CONTRACT_REVIEW_DATE = 'contractReviewDate';

    protected $_resourceType = ResourceType::BEHAVIOURAL_CONTRACT;

    /**
     * @param \Arbor\Query\Query $query
     * @return BehaviouralContract[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("BehaviouralContract");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BehaviouralContract
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::BEHAVIOURAL_CONTRACT, $id);
    }

    /**
     * @return string
     */
    public function getBehaviouralContractTitle()
    {
        return $this->getProperty("behaviouralContractTitle");
    }

    /**
     * @param string $behaviouralContractTitle
     */
    public function setBehaviouralContractTitle($behaviouralContractTitle = null)
    {
        $this->setProperty("behaviouralContractTitle", $behaviouralContractTitle);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty("narrative");
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty("narrative", $narrative);
    }

    /**
     * @return \DateTime
     */
    public function getContractStartDate()
    {
        return $this->getProperty("contractStartDate");
    }

    /**
     * @param \DateTime $contractStartDate
     */
    public function setContractStartDate(\DateTime $contractStartDate = null)
    {
        $this->setProperty("contractStartDate", $contractStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getContractEndDate()
    {
        return $this->getProperty("contractEndDate");
    }

    /**
     * @param \DateTime $contractEndDate
     */
    public function setContractEndDate(\DateTime $contractEndDate = null)
    {
        $this->setProperty("contractEndDate", $contractEndDate);
    }

    /**
     * @return \DateTime
     */
    public function getContractReviewDate()
    {
        return $this->getProperty("contractReviewDate");
    }

    /**
     * @param \DateTime $contractReviewDate
     */
    public function setContractReviewDate(\DateTime $contractReviewDate = null)
    {
        $this->setProperty("contractReviewDate", $contractReviewDate);
    }


}
