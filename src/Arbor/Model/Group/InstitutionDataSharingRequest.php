<?php
namespace Arbor\Model\Group;

use Arbor\Resource\Group\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class InstitutionDataSharingRequest extends ModelBase
{

    const GROUP_INSTITUTION = 'groupInstitution';

    const APPROVED_DATETIME = 'approvedDatetime';

    const APPROVED_BY_SCHOOL_USER = 'approvedBySchoolUser';

    const DECLINED_DATETIME = 'declinedDatetime';

    const DECLINED_BY_SCHOOL_USER = 'declinedBySchoolUser';

    protected $_resourceType = ResourceType::GROUP_INSTITUTION_DATA_SHARING_REQUEST;

    /**
     * @param Query $query
     * @return InstitutionDataSharingRequest[] | Collection
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

        $query->setResourceType(ResourceType::GROUP_INSTITUTION_DATA_SHARING_REQUEST);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InstitutionDataSharingRequest
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GROUP_INSTITUTION_DATA_SHARING_REQUEST, $id);
    }

    /**
     * @return Institution
     */
    public function getGroupInstitution()
    {
        return $this->getProperty('groupInstitution');
    }

    /**
     * @param Institution $groupInstitution
     */
    public function setGroupInstitution(Institution $groupInstitution = null)
    {
        $this->setProperty('groupInstitution', $groupInstitution);
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDatetime()
    {
        return $this->getProperty('approvedDatetime');
    }

    /**
     * @param \DateTime $approvedDatetime
     */
    public function setApprovedDatetime(\DateTime $approvedDatetime = null)
    {
        $this->setProperty('approvedDatetime', $approvedDatetime);
    }

    /**
     * @return int
     */
    public function getApprovedBySchoolUser()
    {
        return $this->getProperty('approvedBySchoolUser');
    }

    /**
     * @param int $approvedBySchoolUser
     */
    public function setApprovedBySchoolUser($approvedBySchoolUser = null)
    {
        $this->setProperty('approvedBySchoolUser', $approvedBySchoolUser);
    }

    /**
     * @return \DateTime
     */
    public function getDeclinedDatetime()
    {
        return $this->getProperty('declinedDatetime');
    }

    /**
     * @param \DateTime $declinedDatetime
     */
    public function setDeclinedDatetime(\DateTime $declinedDatetime = null)
    {
        $this->setProperty('declinedDatetime', $declinedDatetime);
    }

    /**
     * @return int
     */
    public function getDeclinedBySchoolUser()
    {
        return $this->getProperty('declinedBySchoolUser');
    }

    /**
     * @param int $declinedBySchoolUser
     */
    public function setDeclinedBySchoolUser($declinedBySchoolUser = null)
    {
        $this->setProperty('declinedBySchoolUser', $declinedBySchoolUser);
    }


}
