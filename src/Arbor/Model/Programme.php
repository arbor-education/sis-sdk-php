<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Programme extends ModelBase
{
    public const NAME = 'name';

    public const SHORT_NAME = 'shortName';

    public const IDENTIFIER = 'identifier';

    public const FACULTY = 'faculty';

    public const IS_TRAINEESHIP = 'isTraineeship';

    protected $_resourceType = ResourceType::PROGRAMME;

    /**
     * @param Query $query
     * @return Programme[] | Collection
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

        $query->setResourceType(ResourceType::PROGRAMME);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Programme
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROGRAMME, $id);
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
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty('shortName');
    }

    /**
     * @param string $shortName
     */
    public function setShortName(string $shortName = null)
    {
        $this->setProperty('shortName', $shortName);
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->getProperty('identifier');
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier(string $identifier = null)
    {
        $this->setProperty('identifier', $identifier);
    }

    /**
     * @return \Arbor\Model\Faculty
     */
    public function getFaculty()
    {
        return $this->getProperty('faculty');
    }

    /**
     * @param \Arbor\Model\Faculty $faculty
     */
    public function setFaculty(\Arbor\Model\Faculty $faculty = null)
    {
        $this->setProperty('faculty', $faculty);
    }

    /**
     * @return bool
     */
    public function getIsTraineeship()
    {
        return $this->getProperty('isTraineeship');
    }

    /**
     * @param bool $isTraineeship
     */
    public function setIsTraineeship(bool $isTraineeship = null)
    {
        $this->setProperty('isTraineeship', $isTraineeship);
    }
}
