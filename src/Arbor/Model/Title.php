<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Title extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const TITLE = 'title';

    const IS_MALE = 'isMale';

    const IS_FEMALE = 'isFemale';

    protected $_resourceType = ResourceType::TITLE;

    /**
     * @param Query $query
     * @return Title[] | Collection
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

        $query->setResourceType(ResourceType::TITLE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Title
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::TITLE, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param string $title
     */
    public function setTitle($title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return bool
     */
    public function getIsMale()
    {
        return $this->getProperty('isMale');
    }

    /**
     * @param bool $isMale
     */
    public function setIsMale($isMale = null)
    {
        $this->setProperty('isMale', $isMale);
    }

    /**
     * @return bool
     */
    public function getIsFemale()
    {
        return $this->getProperty('isFemale');
    }

    /**
     * @param bool $isFemale
     */
    public function setIsFemale($isFemale = null)
    {
        $this->setProperty('isFemale', $isFemale);
    }
}
