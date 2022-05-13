<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationAwardLearningUnit extends ModelBase
{
    const QUALIFICATION_AWARD = 'qualificationAward';

    const QUALIFICATION_LEARNING_UNIT = 'qualificationLearningUnit';

    const IS_USER_DEFINED = 'isUserDefined';

    protected $_resourceType = ResourceType::QUALIFICATION_AWARD_LEARNING_UNIT;

    /**
     * @param Query $query
     * @return QualificationAwardLearningUnit[] | Collection
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
     * @return QualificationAward
     */
    public function getQualificationAward()
    {
        return $this->getProperty('qualificationAward');
    }

    /**
     * @param QualificationAward $qualificationAward
     */
    public function setQualificationAward(QualificationAward $qualificationAward = null)
    {
        $this->setProperty('qualificationAward', $qualificationAward);
    }

    /**
     * @return QualificationLearningUnit
     */
    public function getQualificationLearningUnit()
    {
        return $this->getProperty('qualificationLearningUnit');
    }

    /**
     * @param QualificationLearningUnit $qualificationLearningUnit
     */
    public function setQualificationLearningUnit(QualificationLearningUnit $qualificationLearningUnit = null)
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
    public function setIsUserDefined($isUserDefined = null)
    {
        $this->setProperty('isUserDefined', $isUserDefined);
    }
}
