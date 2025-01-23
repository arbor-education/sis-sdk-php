<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SenStatusAssignment extends ModelBase
{
    public const SEN_ADVICE_AND_ASSESSMENT = 'senAdviceAndAssessment';

    public const SEN_CURRICULUM_AND_TEACHING_METHODS = 'senCurriculumAndTeachingMethods';

    public const SEN_GROUPING_AND_SUPPORT = 'senGroupingAndSupport';

    public const SEN_SPECIALISED_RESOURCES = 'senSpecialisedResources';

    protected $_resourceType = ResourceType::CYMRU_SEN_STATUS_ASSIGNMENT;

    /**
     * @param Query $query
     * @return SenStatusAssignment[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_SEN_STATUS_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SenStatusAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_SEN_STATUS_ASSIGNMENT, $id);
    }

    /**
     * @return string
     */
    public function getSenAdviceAndAssessment()
    {
        return $this->getProperty('senAdviceAndAssessment');
    }

    /**
     * @param string $senAdviceAndAssessment
     */
    public function setSenAdviceAndAssessment(string $senAdviceAndAssessment = null)
    {
        $this->setProperty('senAdviceAndAssessment', $senAdviceAndAssessment);
    }

    /**
     * @return string
     */
    public function getSenCurriculumAndTeachingMethods()
    {
        return $this->getProperty('senCurriculumAndTeachingMethods');
    }

    /**
     * @param string $senCurriculumAndTeachingMethods
     */
    public function setSenCurriculumAndTeachingMethods(string $senCurriculumAndTeachingMethods = null)
    {
        $this->setProperty('senCurriculumAndTeachingMethods', $senCurriculumAndTeachingMethods);
    }

    /**
     * @return string
     */
    public function getSenGroupingAndSupport()
    {
        return $this->getProperty('senGroupingAndSupport');
    }

    /**
     * @param string $senGroupingAndSupport
     */
    public function setSenGroupingAndSupport(string $senGroupingAndSupport = null)
    {
        $this->setProperty('senGroupingAndSupport', $senGroupingAndSupport);
    }

    /**
     * @return string
     */
    public function getSenSpecialisedResources()
    {
        return $this->getProperty('senSpecialisedResources');
    }

    /**
     * @param string $senSpecialisedResources
     */
    public function setSenSpecialisedResources(string $senSpecialisedResources = null)
    {
        $this->setProperty('senSpecialisedResources', $senSpecialisedResources);
    }
}
