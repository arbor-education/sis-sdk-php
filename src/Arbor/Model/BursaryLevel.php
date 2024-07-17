<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BursaryLevel extends ModelBase
{
    public const NAME = 'name';

    public const BURSARY_TYPE = 'bursaryType';

    protected $_resourceType = ResourceType::BURSARY_LEVEL;

    /**
     * @param Query $query
     * @return BursaryLevel[] | Collection
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
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return \Arbor\Model\BursaryType
     */
    public function getBursaryType()
    {
        return $this->getProperty('bursaryType');
    }

    /**
     * @param \Arbor\Model\BursaryType $bursaryType
     */
    public function setBursaryType(\Arbor\Model\BursaryType $bursaryType = null)
    {
        $this->setProperty('bursaryType', $bursaryType);
    }
}
