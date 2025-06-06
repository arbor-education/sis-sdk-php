<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class DataReturnCompleter extends ModelBase
{
    public const DATA_RETURN = 'dataReturn';

    public const HOURS = 'hours';

    public const ROLE = 'role';

    protected $_resourceType = ResourceType::CYMRU_DATA_RETURN_COMPLETER;

    /**
     * @param Query $query
     * @return DataReturnCompleter[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_DATA_RETURN_COMPLETER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DataReturnCompleter
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_DATA_RETURN_COMPLETER, $id);
    }

    /**
     * @return \Arbor\Model\Statutory\DataReturn
     */
    public function getDataReturn()
    {
        return $this->getProperty('dataReturn');
    }

    /**
     * @param \Arbor\Model\Statutory\DataReturn $dataReturn
     */
    public function setDataReturn(\Arbor\Model\Statutory\DataReturn $dataReturn = null)
    {
        $this->setProperty('dataReturn', $dataReturn);
    }

    /**
     * @return int
     */
    public function getHours()
    {
        return $this->getProperty('hours');
    }

    /**
     * @param int $hours
     */
    public function setHours(int $hours = null)
    {
        $this->setProperty('hours', $hours);
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->getProperty('role');
    }

    /**
     * @param string $role
     */
    public function setRole(string $role = null)
    {
        $this->setProperty('role', $role);
    }
}
