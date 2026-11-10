<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SenStatusAssignmentAreaOfNeed extends ModelBase
{
    public const SEN_STATUS_ASSIGNMENT = 'senStatusAssignment';

    public const AREA_OF_NEED = 'areaOfNeed';

    protected $_resourceType = ResourceType::CYMRU_SEN_STATUS_ASSIGNMENT_AREA_OF_NEED;

    /**
     * @param Query $query
     * @return SenStatusAssignmentAreaOfNeed[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_SEN_STATUS_ASSIGNMENT_AREA_OF_NEED);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SenStatusAssignmentAreaOfNeed
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::CYMRU_SEN_STATUS_ASSIGNMENT_AREA_OF_NEED, $id);
    }

    /**
     * @return \Arbor\Model\Cymru\SenStatusAssignment
     */
    public function getSenStatusAssignment()
    {
        return $this->getProperty('senStatusAssignment');
    }

    /**
     * @param \Arbor\Model\Cymru\SenStatusAssignment $senStatusAssignment
     */
    public function setSenStatusAssignment(\Arbor\Model\Cymru\SenStatusAssignment $senStatusAssignment = null)
    {
        $this->setProperty('senStatusAssignment', $senStatusAssignment);
    }

    /**
     * @return string
     */
    public function getAreaOfNeed()
    {
        return $this->getProperty('areaOfNeed');
    }

    /**
     * @param string $areaOfNeed
     */
    public function setAreaOfNeed(string $areaOfNeed = null)
    {
        $this->setProperty('areaOfNeed', $areaOfNeed);
    }
}
