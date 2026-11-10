<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Club extends ModelBase
{
    public const DFE_FREE_BREAKFAST_CLUB = 'dfeFreeBreakfastClub';

    protected $_resourceType = ResourceType::UK_DFE_CLUB;

    /**
     * @param Query $query
     * @return Club[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_CLUB);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Club
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_CLUB, $id);
    }

    /**
     * @return bool
     */
    public function getDfeFreeBreakfastClub()
    {
        return $this->getProperty('dfeFreeBreakfastClub');
    }

    /**
     * @param bool $dfeFreeBreakfastClub
     */
    public function setDfeFreeBreakfastClub(bool $dfeFreeBreakfastClub = null)
    {
        $this->setProperty('dfeFreeBreakfastClub', $dfeFreeBreakfastClub);
    }
}
