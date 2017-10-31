<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class CurriculumSection extends ModelBase
{
    const CURRICULUM = 'curriculum';

    const CODE = 'code';

    const NAME = 'name';

    const SHORT_NAME = 'shortName';

    const PARENT_CURRICULUM_SECTION = 'parentCurriculumSection';

    const ASSESSMENT = 'assessment';

    const WEIGHTING = 'weighting';

    protected $_resourceType = ResourceType::CURRICULUM_SECTION;

    /**
     * @param Query $query
     * @return CurriculumSection[] | Collection
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

        $query->setResourceType(ResourceType::CURRICULUM_SECTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CurriculumSection
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CURRICULUM_SECTION, $id);
    }

    /**
     * @return Curriculum
     */
    public function getCurriculum()
    {
        return $this->getProperty('curriculum');
    }

    /**
     * @param Curriculum $curriculum
     */
    public function setCurriculum(Curriculum $curriculum = null)
    {
        $this->setProperty('curriculum', $curriculum);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
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
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return CurriculumSection
     */
    public function getParentCurriculumSection()
    {
        return $this->getProperty('parentCurriculumSection');
    }

    /**
     * @param CurriculumSection $parentCurriculumSection
     */
    public function setParentCurriculumSection(CurriculumSection $parentCurriculumSection = null)
    {
        $this->setProperty('parentCurriculumSection', $parentCurriculumSection);
    }

    /**
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
    }

    /**
     * @return float
     */
    public function getWeighting()
    {
        return $this->getProperty('weighting');
    }

    /**
     * @param float $weighting
     */
    public function setWeighting($weighting = null)
    {
        $this->setProperty('weighting', $weighting);
    }
}
