<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class StudentFundingType extends ModelBase
{
    const D00209 = 'd00209';

    protected $_resourceType = ResourceType::UK_DFE_STUDENT_FUNDING_TYPE;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentFundingType[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UkDfe_StudentFundingType");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentFundingType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UK_DFE_STUDENT_FUNDING_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getD00209()
    {
        return $this->getProperty("d00209");
    }

    /**
     * @param string $d00209
     */
    public function setD00209($d00209 = null)
    {
        $this->setProperty("d00209", $d00209);
    }
}
