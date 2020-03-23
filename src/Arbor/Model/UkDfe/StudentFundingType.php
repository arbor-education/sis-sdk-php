<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class StudentFundingType extends ModelBase
{

    const D00209 = 'd00209';

    protected $_resourceType = ResourceType::UK_DFE_STUDENT_FUNDING_TYPE;

    /**
     * @param Query $query
     * @return StudentFundingType[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_STUDENT_FUNDING_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentFundingType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_STUDENT_FUNDING_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getD00209()
    {
        return $this->getProperty('d00209');
    }

    /**
     * @param string $d00209
     */
    public function setD00209($d00209 = null)
    {
        $this->setProperty('d00209', $d00209);
    }


}
