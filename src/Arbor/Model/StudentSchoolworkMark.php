<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentSchoolworkMark extends ModelBase
{

    const STUDENT_SCHOOLWORK = 'studentSchoolwork';

    const SCHOOLWORK_ASPECT = 'schoolworkAspect';

    const MARK_INTEGER = 'markInteger';

    const MARK_DECIMAL = 'markDecimal';

    const MARK_NUMERIC = 'markNumeric';

    const MARK_GRADE = 'markGrade';

    const MARK_DATE = 'markDate';

    protected $_resourceType = ResourceType::STUDENT_SCHOOLWORK_MARK;

    /**
     * @param Query $query
     * @return StudentSchoolworkMark[] | Collection
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
     * @return StudentSchoolwork
     */
    public function getStudentSchoolwork()
    {
        return $this->getProperty('studentSchoolwork');
    }

    /**
     * @param StudentSchoolwork $studentSchoolwork
     */
    public function setStudentSchoolwork(StudentSchoolwork $studentSchoolwork = null)
    {
        $this->setProperty('studentSchoolwork', $studentSchoolwork);
    }

    /**
     * @return SchoolworkAspect
     */
    public function getSchoolworkAspect()
    {
        return $this->getProperty('schoolworkAspect');
    }

    /**
     * @param SchoolworkAspect $schoolworkAspect
     */
    public function setSchoolworkAspect(SchoolworkAspect $schoolworkAspect = null)
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
    public function setMarkInteger($markInteger = null)
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
    public function setMarkDecimal($markDecimal = null)
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
    public function setMarkNumeric($markNumeric = null)
    {
        $this->setProperty('markNumeric', $markNumeric);
    }

    /**
     * @return Grade
     */
    public function getMarkGrade()
    {
        return $this->getProperty('markGrade');
    }

    /**
     * @param Grade $markGrade
     */
    public function setMarkGrade(Grade $markGrade = null)
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
