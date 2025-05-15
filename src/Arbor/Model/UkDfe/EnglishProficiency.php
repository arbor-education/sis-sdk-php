<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class EnglishProficiency extends ModelBase
{
    public const STUDENT = 'student';

    public const PROFICIENCY = 'proficiency';

    public const PROFICIENCY_DATE = 'proficiencyDate';

    protected $_resourceType = ResourceType::UK_DFE_ENGLISH_PROFICIENCY;

    /**
     * @param Query $query
     * @return EnglishProficiency[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_ENGLISH_PROFICIENCY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EnglishProficiency
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_ENGLISH_PROFICIENCY, $id);
    }

    /**
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return string
     */
    public function getProficiency()
    {
        return $this->getProperty('proficiency');
    }

    /**
     * @param string $proficiency
     */
    public function setProficiency(string $proficiency = null)
    {
        $this->setProperty('proficiency', $proficiency);
    }

    /**
     * @return \DateTime
     */
    public function getProficiencyDate()
    {
        return $this->getProperty('proficiencyDate');
    }

    /**
     * @param \DateTime $proficiencyDate
     */
    public function setProficiencyDate(\DateTime $proficiencyDate = null)
    {
        $this->setProperty('proficiencyDate', $proficiencyDate);
    }
}
