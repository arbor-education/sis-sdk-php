<?php
namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Language extends ModelBase
{

    const D00011_ALPHA3 = 'd00011Alpha3';

    const D00011_ALPHA4 = 'd00011Alpha4';

    protected $_resourceType = ResourceType::UK_DFE_LANGUAGE;

    /**
     * @param Query $query
     * @return Language[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_LANGUAGE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Language
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_LANGUAGE, $id);
    }

    /**
     * @return string
     */
    public function getD00011Alpha3()
    {
        return $this->getProperty('d00011Alpha3');
    }

    /**
     * @param string $d00011Alpha3
     */
    public function setD00011Alpha3($d00011Alpha3 = null)
    {
        $this->setProperty('d00011Alpha3', $d00011Alpha3);
    }

    /**
     * @return string
     */
    public function getD00011Alpha4()
    {
        return $this->getProperty('d00011Alpha4');
    }

    /**
     * @param string $d00011Alpha4
     */
    public function setD00011Alpha4($d00011Alpha4 = null)
    {
        $this->setProperty('d00011Alpha4', $d00011Alpha4);
    }


}
