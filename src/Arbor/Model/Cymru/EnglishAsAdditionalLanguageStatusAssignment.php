<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class EnglishAsAdditionalLanguageStatusAssignment extends ModelBase
{
    public const PROGRESS = 'progress';

    public const PROGRESS_DATE = 'progressDate';

    public const STUDENT = 'student';

    protected $_resourceType = ResourceType::CYMRU_ENGLISH_AS_ADDITIONAL_LANGUAGE_STATUS_ASSIGNMENT;

    /**
     * @param Query $query
     * @return EnglishAsAdditionalLanguageStatusAssignment[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_ENGLISH_AS_ADDITIONAL_LANGUAGE_STATUS_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EnglishAsAdditionalLanguageStatusAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_ENGLISH_AS_ADDITIONAL_LANGUAGE_STATUS_ASSIGNMENT, $id);
    }

    /**
     * @return string
     */
    public function getProgress()
    {
        return $this->getProperty('progress');
    }

    /**
     * @param string $progress
     */
    public function setProgress(string $progress = null)
    {
        $this->setProperty('progress', $progress);
    }

    /**
     * @return \DateTime
     */
    public function getProgressDate()
    {
        return $this->getProperty('progressDate');
    }

    /**
     * @param \DateTime $progressDate
     */
    public function setProgressDate(\DateTime $progressDate = null)
    {
        $this->setProperty('progressDate', $progressDate);
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
}
