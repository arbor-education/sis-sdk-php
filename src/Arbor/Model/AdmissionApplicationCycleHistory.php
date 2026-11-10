<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdmissionApplicationCycleHistory extends ModelBase
{
    public const ADMISSION_APPLICATION = 'admissionApplication';

    public const ADMISSION_CYCLE = 'admissionCycle';

    public const CYCLE_NAME = 'cycleName';

    protected $_resourceType = ResourceType::ADMISSION_APPLICATION_CYCLE_HISTORY;

    /**
     * @param Query $query
     * @return AdmissionApplicationCycleHistory[] | Collection
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

        $query->setResourceType(ResourceType::ADMISSION_APPLICATION_CYCLE_HISTORY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdmissionApplicationCycleHistory
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ADMISSION_APPLICATION_CYCLE_HISTORY, $id);
    }

    /**
     * @return \Arbor\Model\AdmissionApplication
     */
    public function getAdmissionApplication()
    {
        return $this->getProperty('admissionApplication');
    }

    /**
     * @param \Arbor\Model\AdmissionApplication $admissionApplication
     */
    public function setAdmissionApplication(\Arbor\Model\AdmissionApplication $admissionApplication = null)
    {
        $this->setProperty('admissionApplication', $admissionApplication);
    }

    /**
     * @return \Arbor\Model\AdmissionCycle
     */
    public function getAdmissionCycle()
    {
        return $this->getProperty('admissionCycle');
    }

    /**
     * @param \Arbor\Model\AdmissionCycle $admissionCycle
     */
    public function setAdmissionCycle(\Arbor\Model\AdmissionCycle $admissionCycle = null)
    {
        $this->setProperty('admissionCycle', $admissionCycle);
    }

    /**
     * @return string
     */
    public function getCycleName()
    {
        return $this->getProperty('cycleName');
    }

    /**
     * @param string $cycleName
     */
    public function setCycleName(string $cycleName = null)
    {
        $this->setProperty('cycleName', $cycleName);
    }
}
