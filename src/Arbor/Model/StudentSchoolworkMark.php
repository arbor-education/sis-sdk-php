<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentSchoolworkMark extends ModelBase
{
    public const STUDENT_SCHOOLWORK = 'studentSchoolwork';

    public const SCHOOLWORK_ASPECT = 'schoolworkAspect';

    public const MARK_INTEGER = 'markInteger';

    public const MARK_DECIMAL = 'markDecimal';

    public const MARK_NUMERIC = 'markNumeric';

    public const MARK_GRADE = 'markGrade';

    public const MARK_DATE = 'markDate';

    protected $_resourceType = ResourceType::STUDENT_SCHOOLWORK_MARK;

    /**
     * @param Query $query
     * @return StudentSchoolworkMark[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_SCHOOLWORK_MARK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentSchoolworkMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_SCHOOLWORK_MARK, $id);
    }

    /**
     * @return \Arbor\Model\StudentSchoolwork
     */
    public function getStudentSchoolwork()
    {
        return $this->getProperty('studentSchoolwork');
    }

    /**
     * @param \Arbor\Model\StudentSchoolwork $studentSchoolwork
     */
    public function setStudentSchoolwork(\Arbor\Model\StudentSchoolwork $studentSchoolwork = null)
    {
        $this->setProperty('studentSchoolwork', $studentSchoolwork);
    }

    /**
     * @return \Arbor\Model\SchoolworkAspect
     */
    public function getSchoolworkAspect()
    {
        return $this->getProperty('schoolworkAspect');
    }

    /**
     * @param \Arbor\Model\SchoolworkAspect $schoolworkAspect
     */
    public function setSchoolworkAspect(\Arbor\Model\SchoolworkAspect $schoolworkAspect = null)
    {
        $this->setProperty('schoolworkAspect', $schoolworkAspect);
    }

    /**
     * @return int
     */
    public function getMarkInteger()
    {
        return $this->getProperty('markInteger');
    }

    /**
     * @param int $markInteger
     */
    public function setMarkInteger(int $markInteger = null)
    {
        $this->setProperty('markInteger', $markInteger);
    }

    /**
     * @return float
     */
    public function getMarkDecimal()
    {
        return $this->getProperty('markDecimal');
    }

    /**
     * @param float $markDecimal
     */
    public function setMarkDecimal(float $markDecimal = null)
    {
        $this->setProperty('markDecimal', $markDecimal);
    }

    /**
     * @return float
     */
    public function getMarkNumeric()
    {
        return $this->getProperty('markNumeric');
    }

    /**
     * @param float $markNumeric
     */
    public function setMarkNumeric(float $markNumeric = null)
    {
        $this->setProperty('markNumeric', $markNumeric);
    }

    /**
     * @return \Arbor\Model\Grade
     */
    public function getMarkGrade()
    {
        return $this->getProperty('markGrade');
    }

    /**
     * @param \Arbor\Model\Grade $markGrade
     */
    public function setMarkGrade(\Arbor\Model\Grade $markGrade = null)
    {
        $this->setProperty('markGrade', $markGrade);
    }

    /**
     * @return \DateTime
     */
    public function getMarkDate()
    {
        return $this->getProperty('markDate');
    }

    /**
     * @param \DateTime $markDate
     */
    public function setMarkDate(\DateTime $markDate = null)
    {
        $this->setProperty('markDate', $markDate);
    }
}
