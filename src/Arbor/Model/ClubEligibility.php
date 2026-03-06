<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ClubEligibility extends ModelBase
{
    public const CLUB = 'club';

    public const ELIGIBLE = 'eligible';

    protected $_resourceType = ResourceType::CLUB_ELIGIBILITY;

    /**
     * @param Query $query
     * @return ClubEligibility[] | Collection
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

        $query->setResourceType(ResourceType::CLUB_ELIGIBILITY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ClubEligibility
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CLUB_ELIGIBILITY, $id);
    }

    /**
     * @return \Arbor\Model\Club
     */
    public function getClub()
    {
        return $this->getProperty('club');
    }

    /**
     * @param \Arbor\Model\Club $club
     */
    public function setClub(\Arbor\Model\Club $club = null)
    {
        $this->setProperty('club', $club);
    }

    /**
     * @return ModelBase
     */
    public function getEligible()
    {
        return $this->getProperty('eligible');
    }

    /**
     * @param ModelBase $eligible
     */
    public function setEligible(\ModelBase $eligible = null)
    {
        $this->setProperty('eligible', $eligible);
    }
}
