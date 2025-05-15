<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Observation extends ModelBase
{
    public const OBSERVING_STAFF = 'observingStaff';

    public const OBSERVED_STAFF = 'observedStaff';

    public const SESSION = 'session';

    public const OBSERVATION_START_DATETIME = 'observationStartDatetime';

    public const OBSERVATION_END_DATETIME = 'observationEndDatetime';

    public const SUBMITTED_DATETIME = 'submittedDatetime';

    public const OBSERVATION_FOCUS = 'observationFocus';

    protected $_resourceType = ResourceType::OBSERVATION;

    /**
     * @param Query $query
     * @return Observation[] | Collection
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
     * @return \Arbor\Model\Staff
     */
    public function getObservingStaff()
    {
        return $this->getProperty('observingStaff');
    }

    /**
     * @param \Arbor\Model\Staff $observingStaff
     */
    public function setObservingStaff(\Arbor\Model\Staff $observingStaff = null)
    {
        $this->setProperty('observingStaff', $observingStaff);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getObservedStaff()
    {
        return $this->getProperty('observedStaff');
    }

    /**
     * @param \Arbor\Model\Staff $observedStaff
     */
    public function setObservedStaff(\Arbor\Model\Staff $observedStaff = null)
    {
        $this->setProperty('observedStaff', $observedStaff);
    }

    /**
     * @return \Arbor\Model\Session
     */
    public function getSession()
    {
        return $this->getProperty('session');
    }

    /**
     * @param \Arbor\Model\Session $session
     */
    public function setSession(\Arbor\Model\Session $session = null)
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
    public function setObservationFocus(string $observationFocus = null)
    {
        $this->setProperty('observationFocus', $observationFocus);
    }
}
