<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class CurriculumGrade extends ModelBase
{

    const D00020 = 'd00020';

    const D00020_ORDER = 'd00020Order';

    protected $_resourceType = ResourceType::UK_DFE_CURRICULUM_GRADE;

    /**
     * @param Query $query
     * @return CurriculumGrade[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_CURRICULUM_GRADE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return CurriculumGrade
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_CURRICULUM_GRADE, $id);
    }

    /**
     * @return string
     */
    public function getD00020()
    {
        return $this->getProperty('d00020');
    }

    /**
     * @param string $d00020
     */
    public function setD00020($d00020 = null)
    {
        $this->setProperty('d00020', $d00020);
    }

    /**
     * @return int
     */
    public function getD00020Order()
    {
        return $this->getProperty('d00020Order');
    }

    /**
     * @param int $d00020Order
     */
    public function setD00020Order($d00020Order = null)
    {
        $this->setProperty('d00020Order', $d00020Order);
    }


}
