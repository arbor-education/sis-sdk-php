<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class CurriculumSection extends ModelBase
{
    public const CURRICULUM = 'curriculum';

    public const CODE = 'code';

    public const NAME = 'name';

    public const SHORT_NAME = 'shortName';

    public const PARENT_CURRICULUM_SECTION = 'parentCurriculumSection';

    public const ASSESSMENT = 'assessment';

    public const WEIGHTING = 'weighting';

    protected $_resourceType = ResourceType::CURRICULUM_SECTION;

    /**
     * @param Query $query
     * @return CurriculumSection[] | Collection
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
     * @return \Arbor\Model\Curriculum
     */
    public function getCurriculum()
    {
        return $this->getProperty('curriculum');
    }

    /**
     * @param \Arbor\Model\Curriculum $curriculum
     */
    public function setCurriculum(\Arbor\Model\Curriculum $curriculum = null)
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
    public function setCode(string $code = null)
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
    public function setName(string $name = null)
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
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return \Arbor\Model\CurriculumSection
     */
    public function getParentCurriculumSection()
    {
        return $this->getProperty('parentCurriculumSection');
    }

    /**
     * @param \Arbor\Model\CurriculumSection $parentCurriculumSection
     */
    public function setParentCurriculumSection(\Arbor\Model\CurriculumSection $parentCurriculumSection = null)
    {
        $this->setProperty('parentCurriculumSection', $parentCurriculumSection);
    }

    /**
     * @return \Arbor\Model\Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param \Arbor\Model\Assessment $assessment
     */
    public function setAssessment(\Arbor\Model\Assessment $assessment = null)
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
    public function setWeighting(float $weighting = null)
    {
        $this->setProperty('weighting', $weighting);
    }
}
