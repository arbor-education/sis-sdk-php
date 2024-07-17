<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationAwardLearningUnit extends ModelBase
{
    public const QUALIFICATION_AWARD = 'qualificationAward';

    public const QUALIFICATION_LEARNING_UNIT = 'qualificationLearningUnit';

    public const IS_USER_DEFINED = 'isUserDefined';

    protected $_resourceType = ResourceType::QUALIFICATION_AWARD_LEARNING_UNIT;

    /**
     * @param Query $query
     * @return QualificationAwardLearningUnit[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_AWARD_LEARNING_UNIT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationAwardLearningUnit
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_AWARD_LEARNING_UNIT, $id);
    }

    /**
     * @return \Arbor\Model\QualificationAward
     */
    public function getQualificationAward()
    {
        return $this->getProperty('qualificationAward');
    }

    /**
     * @param \Arbor\Model\QualificationAward $qualificationAward
     */
    public function setQualificationAward(\Arbor\Model\QualificationAward $qualificationAward = null)
    {
        $this->setProperty('qualificationAward', $qualificationAward);
    }

    /**
     * @return \Arbor\Model\QualificationLearningUnit
     */
    public function getQualificationLearningUnit()
    {
        return $this->getProperty('qualificationLearningUnit');
    }

    /**
     * @param \Arbor\Model\QualificationLearningUnit $qualificationLearningUnit
     */
    public function setQualificationLearningUnit(\Arbor\Model\QualificationLearningUnit $qualificationLearningUnit = null)
    {
        $this->setProperty('qualificationLearningUnit', $qualificationLearningUnit);
    }

    /**
     * @return bool
     */
    public function getIsUserDefined()
    {
        return $this->getProperty('isUserDefined');
    }

    /**
     * @param bool $isUserDefined
     */
    public function setIsUserDefined(bool $isUserDefined = null)
    {
        $this->setProperty('isUserDefined', $isUserDefined);
    }
}
