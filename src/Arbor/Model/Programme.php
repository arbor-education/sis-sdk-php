<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Faculty;

class Programme extends ModelBase
{
    const NAME = 'name';

    const SHORT_NAME = 'shortName';

    const IDENTIFIER = 'identifier';

    const FACULTY = 'faculty';

    protected $_resourceType = ResourceType::PROGRAMME;

    /**
     * @param \Arbor\Query\Query $query
     * @return Programme[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Programme");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Programme
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PROGRAMME, $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty("name");
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty("name", $name);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->getProperty("shortName");
    }

    /**
     * @param string $shortName
     */
    public function setShortName($shortName = null)
    {
        $this->setProperty("shortName", $shortName);
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->getProperty("identifier");
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier($identifier = null)
    {
        $this->setProperty("identifier", $identifier);
    }

    /**
     * @return Faculty
     */
    public function getFaculty()
    {
        return $this->getProperty("faculty");
    }

    /**
     * @param Faculty $faculty
     */
    public function setFaculty(Faculty $faculty = null)
    {
        $this->setProperty("faculty", $faculty);
    }
}
