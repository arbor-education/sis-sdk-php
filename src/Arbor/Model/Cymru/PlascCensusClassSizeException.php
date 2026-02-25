<?php

namespace Arbor\Model\Cymru;

use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\Cymru\ResourceType;

class PlascCensusClassSizeException extends ModelBase
{
    public const DATA_RETURN = 'dataReturn';

    public const PLASC_CENSUS_CLASS = 'plascCensusClass';

    public const COUNT = 'count';

    public const SCHOOL_CENSUS_CLASS_SIZE_EXCEPTION_REASON = 'schoolCensusClassSizeExceptionReason';

    public const PUPILS_IN_CATCHMENT = 'pupilsInCatchment';

    protected $_resourceType = ResourceType::CYMRU_PLASC_CENSUS_CLASS_SIZE_EXCEPTION;

    /**
     * @param Query $query
     * @return PlascCensusClassSizeException[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_PLASC_CENSUS_CLASS_SIZE_EXCEPTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PlascCensusClassSizeException
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_PLASC_CENSUS_CLASS_SIZE_EXCEPTION, $id);
    }

    /**
     * @return \Arbor\Model\Statutory\DataReturn
     */
    public function getDataReturn()
    {
        return $this->getProperty('dataReturn');
    }

    /**
     * @param \Arbor\Model\Statutory\DataReturn $dataReturn
     */
    public function setDataReturn(\Arbor\Model\Statutory\DataReturn $dataReturn = null)
    {
        $this->setProperty('dataReturn', $dataReturn);
    }

    /**
     * @return \Arbor\Model\Cymru\PlascCensusClass
     */
    public function getPlascCensusClass()
    {
        return $this->getProperty('plascCensusClass');
    }

    /**
     * @param \Arbor\Model\Cymru\PlascCensusClass $plascCensusClass
     */
    public function setPlascCensusClass(\Arbor\Model\Cymru\PlascCensusClass $plascCensusClass = null)
    {
        $this->setProperty('plascCensusClass', $plascCensusClass);
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->getProperty('count');
    }

    /**
     * @param int $count
     */
    public function setCount(int $count = null)
    {
        $this->setProperty('count', $count);
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
}
