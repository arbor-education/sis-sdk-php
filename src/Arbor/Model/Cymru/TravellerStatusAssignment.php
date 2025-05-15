<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class TravellerStatusAssignment extends ModelBase
{
    public const END_DATE = 'endDate';

    public const INFORMATION_SOURCE = 'informationSource';

    public const START_DATE = 'startDate';

    public const STUDENT = 'student';

    public const TRAVELLER_STATUS = 'travellerStatus';

    protected $_resourceType = ResourceType::CYMRU_TRAVELLER_STATUS_ASSIGNMENT;

    /**
     * @param Query $query
     * @return TravellerStatusAssignment[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_TRAVELLER_STATUS_ASSIGNMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return TravellerStatusAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_TRAVELLER_STATUS_ASSIGNMENT, $id);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getInformationSource()
    {
        return $this->getProperty('informationSource');
    }

    /**
     * @param string $informationSource
     */
    public function setInformationSource(string $informationSource = null)
    {
        $this->setProperty('informationSource', $informationSource);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
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
     * @return \Arbor\Model\Cymru\TravellerStatus
     */
    public function getTravellerStatus()
    {
        return $this->getProperty('travellerStatus');
    }

    /**
     * @param \Arbor\Model\Cymru\TravellerStatus $travellerStatus
     */
    public function setTravellerStatus(\Arbor\Model\Cymru\TravellerStatus $travellerStatus = null)
    {
        $this->setProperty('travellerStatus', $travellerStatus);
    }
}
