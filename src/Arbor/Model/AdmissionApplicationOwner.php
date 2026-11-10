<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdmissionApplicationOwner extends ModelBase
{
    public const ADMISSION_APPLICATION = 'admissionApplication';

    public const OWNER_STAFF = 'ownerStaff';

    protected $_resourceType = ResourceType::ADMISSION_APPLICATION_OWNER;

    /**
     * @param Query $query
     * @return AdmissionApplicationOwner[] | Collection
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

        $query->setResourceType(ResourceType::ADMISSION_APPLICATION_OWNER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdmissionApplicationOwner
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ADMISSION_APPLICATION_OWNER, $id);
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
     * @return \Arbor\Model\Staff
     */
    public function getOwnerStaff()
    {
        return $this->getProperty('ownerStaff');
    }

    /**
     * @param \Arbor\Model\Staff $ownerStaff
     */
    public function setOwnerStaff(\Arbor\Model\Staff $ownerStaff = null)
    {
        $this->setProperty('ownerStaff', $ownerStaff);
    }
}
