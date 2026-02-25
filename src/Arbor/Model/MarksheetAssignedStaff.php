<?php

namespace Arbor\Model;

use Arbor\Model\ModelBase;
use Arbor\Query\Query;
use Arbor\Resource\ResourceType;

class MarksheetAssignedStaff extends ModelBase
{
    public const MARKSHEET = 'marksheet';

    public const STAFF = 'staff';

    protected $_resourceType = ResourceType::MARKSHEET_ASSIGNED_STAFF;

    /**
     * @param Query $query
     * @return MarksheetAssignedStaff[] | Collection
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

        $query->setResourceType(ResourceType::MARKSHEET_ASSIGNED_STAFF);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MarksheetAssignedStaff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MARKSHEET_ASSIGNED_STAFF, $id);
    }

    /**
     * @return \Arbor\Model\AssessmentMarksheet
     */
    public function getMarksheet()
    {
        return $this->getProperty('marksheet');
    }

    /**
     * @param \Arbor\Model\AssessmentMarksheet $marksheet
     */
    public function setMarksheet(\Arbor\Model\AssessmentMarksheet $marksheet = null)
    {
        $this->setProperty('marksheet', $marksheet);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }
}
