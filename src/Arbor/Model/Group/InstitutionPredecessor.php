<?php
namespace Arbor\Model\Group;

use Arbor\Resource\Group\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class InstitutionPredecessor extends ModelBase
{

    const INSTITUTION = 'institution';

    const PREDECESSOR_INSTITUTION = 'predecessorInstitution';

    const FROM_DATE = 'fromDate';

    protected $_resourceType = ResourceType::GROUP_INSTITUTION_PREDECESSOR;

    /**
     * @param Query $query
     * @return InstitutionPredecessor[] | Collection
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

        $query->setResourceType(ResourceType::GROUP_INSTITUTION_PREDECESSOR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InstitutionPredecessor
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::GROUP_INSTITUTION_PREDECESSOR, $id);
    }

    /**
     * @return Institution
     */
    public function getInstitution()
    {
        return $this->getProperty('institution');
    }

    /**
     * @param Institution $institution
     */
    public function setInstitution(Institution $institution = null)
    {
        $this->setProperty('institution', $institution);
    }

    /**
     * @return Institution
     */
    public function getPredecessorInstitution()
    {
        return $this->getProperty('predecessorInstitution');
    }

    /**
     * @param Institution $predecessorInstitution
     */
    public function setPredecessorInstitution(Institution $predecessorInstitution = null)
    {
        $this->setProperty('predecessorInstitution', $predecessorInstitution);
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->getProperty('fromDate');
    }

    /**
     * @param \DateTime $fromDate
     */
    public function setFromDate(\DateTime $fromDate = null)
    {
        $this->setProperty('fromDate', $fromDate);
    }


}
