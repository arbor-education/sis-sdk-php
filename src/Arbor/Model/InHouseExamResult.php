<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InHouseExamResult extends \ModelBase
{
    public const IN_HOUSE_EXAM = 'inHouseExam';

    public const STUDENT = 'student';

    public const IN_HOUSE_EXAM_ENTRY = 'inHouseExamEntry';

    public const NUMERIC_VALUE = 'numericValue';

    public const IN_HOUSE_EXAM_GRADE = 'inHouseExamGrade';

    public const RESULT_DATE = 'resultDate';

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM_RESULT;

    /**
     * @param Query $query
     * @return InHouseExamResult[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::IN_HOUSE_EXAM_RESULT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InHouseExamResult
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IN_HOUSE_EXAM_RESULT, $id);
    }

    /**
     * @return InHouseExam
     */
    public function getInHouseExam()
    {
        return $this->getProperty('inHouseExam');
    }

    /**
     * @param InHouseExam $inHouseExam
     */
    public function setInHouseExam(\InHouseExam $inHouseExam = null)
    {
        $this->setProperty('inHouseExam', $inHouseExam);
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
    public function setStudent(\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return InHouseExamEntry
     */
    public function getInHouseExamEntry()
    {
        return $this->getProperty('inHouseExamEntry');
    }

    /**
     * @param InHouseExamEntry $inHouseExamEntry
     */
    public function setInHouseExamEntry(\InHouseExamEntry $inHouseExamEntry = null)
    {
        $this->setProperty('inHouseExamEntry', $inHouseExamEntry);
    }

    /**
     * @return float
     */
    public function getNumericValue()
    {
        return $this->getProperty('numericValue');
    }

    /**
     * @param float $numericValue
     */
    public function setNumericValue(float $numericValue = null)
    {
        $this->setProperty('numericValue', $numericValue);
    }

    /**
     * @return InHouseExamGrade
     */
    public function getInHouseExamGrade()
    {
        return $this->getProperty('inHouseExamGrade');
    }

    /**
     * @param InHouseExamGrade $inHouseExamGrade
     */
    public function setInHouseExamGrade(\InHouseExamGrade $inHouseExamGrade = null)
    {
        $this->setProperty('inHouseExamGrade', $inHouseExamGrade);
    }

    /**
     * @return \DateTime
     */
    public function getResultDate()
    {
        return $this->getProperty('resultDate');
    }

    /**
     * @param \DateTime $resultDate
     */
    public function setResultDate(\DateTime $resultDate = null)
    {
        $this->setProperty('resultDate', $resultDate);
    }
}
