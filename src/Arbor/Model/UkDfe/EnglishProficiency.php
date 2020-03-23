<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Student;

class EnglishProficiency extends ModelBase
{

    const STUDENT = 'student';

    const PROFICIENCY = 'proficiency';

    const PROFICIENCY_DATE = 'proficiencyDate';

    protected $_resourceType = ResourceType::UK_DFE_ENGLISH_PROFICIENCY;

    /**
     * @param Query $query
     * @return EnglishProficiency[] | Collection
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
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
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
    public function setProficiency($proficiency = null)
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
