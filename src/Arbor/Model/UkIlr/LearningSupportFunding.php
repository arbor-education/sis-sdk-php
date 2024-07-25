<?php
namespace Arbor\Model\UkIlr;

use Arbor\Resource\UkIlr\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class LearningSupportFunding extends ModelBase
{
    public const PROGRAMME_ENROLMENT = 'programmeEnrolment';

    public const LEARNING_SUPPORT_FUNDING_CODE = 'learningSupportFundingCode';

    protected $_resourceType = ResourceType::UK_ILR_LEARNING_SUPPORT_FUNDING;

    /**
     * @param Query $query
     * @return LearningSupportFunding[] | Collection
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

        $query->setResourceType(ResourceType::UK_ILR_LEARNING_SUPPORT_FUNDING);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return LearningSupportFunding
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_ILR_LEARNING_SUPPORT_FUNDING, $id);
    }

    /**
     * @return \Arbor\Model\ProgrammeEnrolment
     */
    public function getProgrammeEnrolment()
    {
        return $this->getProperty('programmeEnrolment');
    }

    /**
     * @param \Arbor\Model\ProgrammeEnrolment $programmeEnrolment
     */
    public function setProgrammeEnrolment(\Arbor\Model\ProgrammeEnrolment $programmeEnrolment = null)
    {
        $this->setProperty('programmeEnrolment', $programmeEnrolment);
    }

    /**
     * @return int
     */
    public function getLearningSupportFundingCode()
    {
        return $this->getProperty('learningSupportFundingCode');
    }

    /**
     * @param int $learningSupportFundingCode
     */
    public function setLearningSupportFundingCode(int $learningSupportFundingCode = null)
    {
        $this->setProperty('learningSupportFundingCode', $learningSupportFundingCode);
    }
}
