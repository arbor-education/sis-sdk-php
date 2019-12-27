<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Observation extends ModelBase
{

    const OBSERVING_STAFF = 'observingStaff';

    const OBSERVED_STAFF = 'observedStaff';

    const SESSION = 'session';

    const OBSERVATION_START_DATETIME = 'observationStartDatetime';

    const OBSERVATION_END_DATETIME = 'observationEndDatetime';

    const SUBMITTED_DATETIME = 'submittedDatetime';

    const OBSERVATION_FOCUS = 'observationFocus';

    protected $_resourceType = ResourceType::OBSERVATION;

    /**
     * @param Query $query
     * @return Observation[] | Collection
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

        $query->setResourceType(ResourceType::OBSERVATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Observation
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OBSERVATION, $id);
    }

    /**
     * @return Staff
     */
    public function getObservingStaff()
    {
        return $this->getProperty('observingStaff');
    }

    /**
     * @param Staff $observingStaff
     */
    public function setObservingStaff(Staff $observingStaff = null)
    {
        $this->setProperty('observingStaff', $observingStaff);
    }

    /**
     * @return Staff
     */
    public function getObservedStaff()
    {
        return $this->getProperty('observedStaff');
    }

    /**
     * @param Staff $observedStaff
     */
    public function setObservedStaff(Staff $observedStaff = null)
    {
        $this->setProperty('observedStaff', $observedStaff);
    }

    /**
     * @return Session
     */
    public function getSession()
    {
        return $this->getProperty('session');
    }

    /**
     * @param Session $session
     */
    public function setSession(Session $session = null)
    {
        $this->setProperty('session', $session);
    }

    /**
     * @return \DateTime
     */
    public function getObservationStartDatetime()
    {
        return $this->getProperty('observationStartDatetime');
    }

    /**
     * @param \DateTime $observationStartDatetime
     */
    public function setObservationStartDatetime(\DateTime $observationStartDatetime = null)
    {
        $this->setProperty('observationStartDatetime', $observationStartDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getObservationEndDatetime()
    {
        return $this->getProperty('observationEndDatetime');
    }

    /**
     * @param \DateTime $observationEndDatetime
     */
    public function setObservationEndDatetime(\DateTime $observationEndDatetime = null)
    {
        $this->setProperty('observationEndDatetime', $observationEndDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSubmittedDatetime()
    {
        return $this->getProperty('submittedDatetime');
    }

    /**
     * @param \DateTime $submittedDatetime
     */
    public function setSubmittedDatetime(\DateTime $submittedDatetime = null)
    {
        $this->setProperty('submittedDatetime', $submittedDatetime);
    }

    /**
     * @return string
     */
    public function getObservationFocus()
    {
        return $this->getProperty('observationFocus');
    }

    /**
     * @param string $observationFocus
     */
    public function setObservationFocus($observationFocus = null)
    {
        $this->setProperty('observationFocus', $observationFocus);
    }


}
