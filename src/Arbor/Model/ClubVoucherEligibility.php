<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ClubVoucherEligibility extends ModelBase
{
    const CLUB = 'club';

    const GROUP = 'group';

    protected $_resourceType = ResourceType::CLUB_VOUCHER_ELIGIBILITY;

    /**
     * @param Query $query
     * @return ClubVoucherEligibility[] | Collection
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

        $query->setResourceType(ResourceType::CLUB_VOUCHER_ELIGIBILITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClubVoucherEligibility
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLUB_VOUCHER_ELIGIBILITY, $id);
    }

    /**
     * @return Club
     */
    public function getClub()
    {
        return $this->getProperty('club');
    }

    /**
     * @param Club $club
     */
    public function setClub(Club $club = null)
    {
        $this->setProperty('club', $club);
    }

    /**
     * @return ModelBase
     */
    public function getGroup()
    {
        return $this->getProperty('group');
    }

    /**
     * @param ModelBase $group
     */
    public function setGroup(ModelBase $group = null)
    {
        $this->setProperty('group', $group);
    }
}
