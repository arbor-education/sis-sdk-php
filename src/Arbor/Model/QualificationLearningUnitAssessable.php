<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class QualificationLearningUnitAssessable extends ModelBase
{
    public const QUALIFICATION_LEARNING_UNIT = 'qualificationLearningUnit';

    public const QUALIFICATION_ASSESSABLE = 'qualificationAssessable';

    protected $_resourceType = ResourceType::QUALIFICATION_LEARNING_UNIT_ASSESSABLE;

    /**
     * @param Query $query
     * @return QualificationLearningUnitAssessable[] | Collection
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
     * @return \Arbor\Model\QualificationAssessable
     */
    public function getQualificationAssessable()
    {
        return $this->getProperty('qualificationAssessable');
    }

    /**
     * @param \Arbor\Model\QualificationAssessable $qualificationAssessable
     */
    public function setQualificationAssessable(\Arbor\Model\QualificationAssessable $qualificationAssessable = null)
    {
        $this->setProperty('qualificationAssessable', $qualificationAssessable);
    }
}
