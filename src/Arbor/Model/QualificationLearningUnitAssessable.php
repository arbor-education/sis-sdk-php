<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class QualificationLearningUnitAssessable extends ModelBase
{

    const QUALIFICATION_LEARNING_UNIT = 'qualificationLearningUnit';

    const QUALIFICATION_ASSESSABLE = 'qualificationAssessable';

    protected $_resourceType = ResourceType::QUALIFICATION_LEARNING_UNIT_ASSESSABLE;

    /**
     * @param Query $query
     * @return QualificationLearningUnitAssessable[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_LEARNING_UNIT_ASSESSABLE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationLearningUnitAssessable
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_LEARNING_UNIT_ASSESSABLE, $id);
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
     * @return QualificationAssessable
     */
    public function getQualificationAssessable()
    {
        return $this->getProperty('qualificationAssessable');
    }

    /**
     * @param QualificationAssessable $qualificationAssessable
     */
    public function setQualificationAssessable(QualificationAssessable $qualificationAssessable = null)
    {
        $this->setProperty('qualificationAssessable', $qualificationAssessable);
    }


}
