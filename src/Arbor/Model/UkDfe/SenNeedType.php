<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class SenNeedType extends ModelBase
{

    const D00237 = 'd00237';

    const EXPORT_CODE = 'exportCode';

    protected $_resourceType = ResourceType::UK_DFE_SEN_NEED_TYPE;

    /**
     * @param Query $query
     * @return SenNeedType[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_SEN_NEED_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SenNeedType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_SEN_NEED_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getD00237()
    {
        return $this->getProperty('d00237');
    }

    /**
     * @param string $d00237
     */
    public function setD00237($d00237 = null)
    {
        $this->setProperty('d00237', $d00237);
    }

    /**
     * @return string
     */
    public function getExportCode()
    {
        return $this->getProperty('exportCode');
    }

    /**
     * @param string $exportCode
     */
    public function setExportCode($exportCode = null)
    {
        $this->setProperty('exportCode', $exportCode);
    }


}
