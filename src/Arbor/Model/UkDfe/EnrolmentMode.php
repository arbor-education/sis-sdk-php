<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class EnrolmentMode extends ModelBase
{

    const D00018 = 'd00018';

    protected $_resourceType = ResourceType::UK_DFE_ENROLMENT_MODE;

    /**
     * @param Query $query
     * @return EnrolmentMode[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_ENROLMENT_MODE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EnrolmentMode
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_ENROLMENT_MODE, $id);
    }

    /**
     * @return string
     */
    public function getD00018()
    {
        return $this->getProperty('d00018');
    }

    /**
     * @param string $d00018
     */
    public function setD00018($d00018 = null)
    {
        $this->setProperty('d00018', $d00018);
    }


}
