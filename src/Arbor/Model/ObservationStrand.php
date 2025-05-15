<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ObservationStrand extends ModelBase
{
    public const OBSERVATION_THEME = 'observationTheme';

    public const OBSERVATION_GRADE_SET = 'observationGradeSet';

    public const NAME = 'name';

    public const USE_COMMENT = 'useComment';

    protected $_resourceType = ResourceType::OBSERVATION_STRAND;

    /**
     * @param Query $query
     * @return ObservationStrand[] | Collection
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

        $query->setResourceType(ResourceType::OBSERVATION_STRAND);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ObservationStrand
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OBSERVATION_STRAND, $id);
    }

    /**
     * @return \Arbor\Model\ObservationTheme
     */
    public function getObservationTheme()
    {
        return $this->getProperty('observationTheme');
    }

    /**
     * @param \Arbor\Model\ObservationTheme $observationTheme
     */
    public function setObservationTheme(\Arbor\Model\ObservationTheme $observationTheme = null)
    {
        $this->setProperty('observationTheme', $observationTheme);
    }

    /**
     * @return \Arbor\Model\ObservationGradeSet
     */
    public function getObservationGradeSet()
    {
        return $this->getProperty('observationGradeSet');
    }

    /**
     * @param \Arbor\Model\ObservationGradeSet $observationGradeSet
     */
    public function setObservationGradeSet(\Arbor\Model\ObservationGradeSet $observationGradeSet = null)
    {
        $this->setProperty('observationGradeSet', $observationGradeSet);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return bool
     */
    public function getUseComment()
    {
        return $this->getProperty('useComment');
    }

    /**
     * @param bool $useComment
     */
    public function setUseComment(bool $useComment = null)
    {
        $this->setProperty('useComment', $useComment);
    }
}
