<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SchoolCensusClassException extends ModelBase
{
    public const SCHOOL_CENSUS_CLASS = 'schoolCensusClass';

    public const PUPILS_IN_CATCHMENT = 'pupilsInCatchment';

    public const EXCEPTION_COUNT = 'exceptionCount';

    public const SCHOOL_CENSUS_CLASS_SIZE_EXCEPTION_REASON = 'schoolCensusClassSizeExceptionReason';

    protected $_resourceType = ResourceType::CYMRU_SCHOOL_CENSUS_CLASS_EXCEPTION;

    /**
     * @param Query $query
     * @return SchoolCensusClassException[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_SCHOOL_CENSUS_CLASS_EXCEPTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SchoolCensusClassException
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_SCHOOL_CENSUS_CLASS_EXCEPTION, $id);
    }

    /**
     * @return \Arbor\Model\Cymru\SchoolCensusClass
     */
    public function getSchoolCensusClass()
    {
        return $this->getProperty('schoolCensusClass');
    }

    /**
     * @param \Arbor\Model\Cymru\SchoolCensusClass $schoolCensusClass
     */
    public function setSchoolCensusClass(\Arbor\Model\Cymru\SchoolCensusClass $schoolCensusClass = null)
    {
        $this->setProperty('schoolCensusClass', $schoolCensusClass);
    }

    /**
     * @return int
     */
    public function getPupilsInCatchment()
    {
        return $this->getProperty('pupilsInCatchment');
    }

    /**
     * @param int $pupilsInCatchment
     */
    public function setPupilsInCatchment(int $pupilsInCatchment = null)
    {
        $this->setProperty('pupilsInCatchment', $pupilsInCatchment);
    }

    /**
     * @return int
     */
    public function getExceptionCount()
    {
        return $this->getProperty('exceptionCount');
    }

    /**
     * @param int $exceptionCount
     */
    public function setExceptionCount(int $exceptionCount = null)
    {
        $this->setProperty('exceptionCount', $exceptionCount);
    }

    /**
     * @return \Arbor\Model\Cymru\SchoolCensusClassSizeExceptionReason
     */
    public function getSchoolCensusClassSizeExceptionReason()
    {
        return $this->getProperty('schoolCensusClassSizeExceptionReason');
    }

    /**
     * @param \Arbor\Model\Cymru\SchoolCensusClassSizeExceptionReason
     * $schoolCensusClassSizeExceptionReason
     */
    public function setSchoolCensusClassSizeExceptionReason(\Arbor\Model\Cymru\SchoolCensusClassSizeExceptionReason $schoolCensusClassSizeExceptionReason = null)
    {
        $this->setProperty('schoolCensusClassSizeExceptionReason', $schoolCensusClassSizeExceptionReason);
    }
}
