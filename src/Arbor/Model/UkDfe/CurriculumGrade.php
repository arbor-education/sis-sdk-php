<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class CurriculumGrade extends ModelBase
{
    const D00020 = 'd00020';

    const D00020_ORDER = 'd00020Order';

    protected $_resourceType = ResourceType::UK_DFE_CURRICULUM_GRADE;

    /**
     * @param \Arbor\Query\Query $query
     * @return CurriculumGrade[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UkDfe_CurriculumGrade");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CurriculumGrade
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UK_DFE_CURRICULUM_GRADE, $id);
    }

    /**
     * @return string
     */
    public function getD00020()
    {
        return $this->getProperty("d00020");
    }

    /**
     * @param string $d00020
     */
    public function setD00020($d00020 = null)
    {
        $this->setProperty("d00020", $d00020);
    }

    /**
     * @return int
     */
    public function getD00020Order()
    {
        return $this->getProperty("d00020Order");
    }

    /**
     * @param int $d00020Order
     */
    public function setD00020Order($d00020Order = null)
    {
        $this->setProperty("d00020Order", $d00020Order);
    }
}
