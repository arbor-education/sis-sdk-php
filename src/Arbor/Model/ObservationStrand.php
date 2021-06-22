<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ObservationStrand extends ModelBase
{

    const OBSERVATION_THEME = 'observationTheme';

    const OBSERVATION_GRADE_SET = 'observationGradeSet';

    const NAME = 'name';

    const USE_COMMENT = 'useComment';

    protected $_resourceType = ResourceType::OBSERVATION_STRAND;

    /**
     * @param Query $query
     * @return ObservationStrand[] | Collection
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
     * @return ObservationTheme
     */
    public function getObservationTheme()
    {
        return $this->getProperty('observationTheme');
    }

    /**
     * @param ObservationTheme $observationTheme
     */
    public function setObservationTheme(ObservationTheme $observationTheme = null)
    {
        $this->setProperty('observationTheme', $observationTheme);
    }

    /**
     * @return ObservationGradeSet
     */
    public function getObservationGradeSet()
    {
        return $this->getProperty('observationGradeSet');
    }

    /**
     * @param ObservationGradeSet $observationGradeSet
     */
    public function setObservationGradeSet(ObservationGradeSet $observationGradeSet = null)
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
    public function setName($name = null)
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
    public function setUseComment($useComment = null)
    {
        $this->setProperty('useComment', $useComment);
    }


}
