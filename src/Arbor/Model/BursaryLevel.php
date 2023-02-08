<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BursaryLevel extends ModelBase
{

    const NAME = 'name';

    const BURSARY_TYPE = 'bursaryType';

    protected $_resourceType = ResourceType::BURSARY_LEVEL;

    /**
     * @param Query $query
     * @return BursaryLevel[] | Collection
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

        $query->setResourceType(ResourceType::BURSARY_LEVEL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BursaryLevel
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BURSARY_LEVEL, $id);
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
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return BursaryType
     */
    public function getBursaryType()
    {
        return $this->getProperty('bursaryType');
    }

    /**
     * @param BursaryType $bursaryType
     */
    public function setBursaryType(BursaryType $bursaryType = null)
    {
        $this->setProperty('bursaryType', $bursaryType);
    }


}
