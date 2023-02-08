<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Subject extends ModelBase
{

    const USED_IN_SWF_ONLY = 'usedInSwfOnly';

    const USED_IN_CBDS_ONLY = 'usedInCbdsOnly';

    const D00115 = 'd00115';

    const D00220 = 'd00220';

    protected $_resourceType = ResourceType::UK_DFE_SUBJECT;

    /**
     * @param Query $query
     * @return Subject[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_SUBJECT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Subject
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_SUBJECT, $id);
    }

    /**
     * @return bool
     */
    public function getUsedInSwfOnly()
    {
        return $this->getProperty('usedInSwfOnly');
    }

    /**
     * @param bool $usedInSwfOnly
     */
    public function setUsedInSwfOnly($usedInSwfOnly = null)
    {
        $this->setProperty('usedInSwfOnly', $usedInSwfOnly);
    }

    /**
     * @return bool
     */
    public function getUsedInCbdsOnly()
    {
        return $this->getProperty('usedInCbdsOnly');
    }

    /**
     * @param bool $usedInCbdsOnly
     */
    public function setUsedInCbdsOnly($usedInCbdsOnly = null)
    {
        $this->setProperty('usedInCbdsOnly', $usedInCbdsOnly);
    }

    /**
     * @return string
     */
    public function getD00115()
    {
        return $this->getProperty('d00115');
    }

    /**
     * @param string $d00115
     */
    public function setD00115($d00115 = null)
    {
        $this->setProperty('d00115', $d00115);
    }

    /**
     * @return string
     */
    public function getD00220()
    {
        return $this->getProperty('d00220');
    }

    /**
     * @param string $d00220
     */
    public function setD00220($d00220 = null)
    {
        $this->setProperty('d00220', $d00220);
    }


}
