<?php
namespace Arbor\Model\UkIlr;

use Arbor\Resource\UkIlr\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class AcademicYearEnrolment extends ModelBase
{
    public const LEARNING_SUPPORT_COST = 'learningSupportCost';

    protected $_resourceType = ResourceType::UK_ILR_ACADEMIC_YEAR_ENROLMENT;

    /**
     * @param Query $query
     * @return AcademicYearEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::UK_ILR_ACADEMIC_YEAR_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicYearEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_ILR_ACADEMIC_YEAR_ENROLMENT, $id);
    }

    /**
     * @return string
     */
    public function getLearningSupportCost()
    {
        return $this->getProperty('learningSupportCost');
    }

    /**
     * @param string $learningSupportCost
     */
    public function setLearningSupportCost(string $learningSupportCost = null)
    {
        $this->setProperty('learningSupportCost', $learningSupportCost);
    }
}
