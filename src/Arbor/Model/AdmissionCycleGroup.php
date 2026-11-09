<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdmissionCycleGroup extends ModelBase
{
    public const NAME = 'name';

    public const ADMISSION_GROUP = 'admissionGroup';

    public const ADMISSION_CYCLE = 'admissionCycle';

    protected $_resourceType = ResourceType::ADMISSION_CYCLE_GROUP;

    /**
     * @param Query $query
     * @return AdmissionCycleGroup[] | Collection
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

        $query->setResourceType(ResourceType::ADMISSION_CYCLE_GROUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdmissionCycleGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ADMISSION_CYCLE_GROUP, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return \Arbor\Model\AdmissionGroup
     */
    public function getAdmissionGroup()
    {
        return $this->getProperty('admissionGroup');
    }

    /**
     * @param \Arbor\Model\AdmissionGroup $admissionGroup
     */
    public function setAdmissionGroup(\Arbor\Model\AdmissionGroup $admissionGroup = null)
    {
        $this->setProperty('admissionGroup', $admissionGroup);
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
}
