<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class TravellerStatusAssignment extends ModelBase
{
    public const TRAVELLER_STATUS = 'travellerStatus';

    public const STUDENT = 'student';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const INFORMATION_SOURCE = 'informationSource';

    protected $_resourceType = ResourceType::UK_DFE_TRAVELLER_STATUS_ASSIGNMENT;

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

        $query->setResourceType(ResourceType::UK_DFE_TRAVELLER_STATUS_ASSIGNMENT);

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

        return $gateway->retrieve(ResourceType::UK_DFE_TRAVELLER_STATUS_ASSIGNMENT, $id);
    }

    /**
     * @return \Arbor\Model\UkDfe\TravellerStatus
     */
    public function getTravellerStatus()
    {
        return $this->getProperty('travellerStatus');
    }

    /**
     * @param \Arbor\Model\UkDfe\TravellerStatus $travellerStatus
     */
    public function setTravellerStatus(\Arbor\Model\UkDfe\TravellerStatus $travellerStatus = null)
    {
        $this->setProperty('travellerStatus', $travellerStatus);
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
}
