<?php
namespace Arbor\Model\Cymru;

use Arbor\Resource\Cymru\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class Language extends ModelBase
{
    public const CYM_FULL_CODE = 'cymFullCode';

    public const CYM_LABEL = 'cymLabel';

    protected $_resourceType = ResourceType::CYMRU_LANGUAGE;

    /**
     * @param Query $query
     * @return Language[] | Collection
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

        $query->setResourceType(ResourceType::CYMRU_LANGUAGE);

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

        return $gateway->retrieve(ResourceType::CYMRU_LANGUAGE, $id);
    }

    /**
     * @return string
     */
    public function getCymFullCode()
    {
        return $this->getProperty('cymFullCode');
    }

    /**
     * @param string $cymFullCode
     */
    public function setCymFullCode(string $cymFullCode = null)
    {
        $this->setProperty('cymFullCode', $cymFullCode);
    }

    /**
     * @return string
     */
    public function getCymLabel()
    {
        return $this->getProperty('cymLabel');
    }

    /**
     * @param string $cymLabel
     */
    public function setCymLabel(string $cymLabel = null)
    {
        $this->setProperty('cymLabel', $cymLabel);
    }
}
