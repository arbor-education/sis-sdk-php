<?php
namespace Arbor\Model\UkJcq;

use Arbor\Resource\UkJcq\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class EducationalInstitution extends ModelBase
{
    public const CENTER_NUMBER = 'centerNumber';

    public const COUNTRY_CODE = 'countryCode';

    protected $_resourceType = ResourceType::UK_JCQ_EDUCATIONAL_INSTITUTION;

    /**
     * @param Query $query
     * @return EducationalInstitution[] | Collection
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

        $query->setResourceType(ResourceType::UK_JCQ_EDUCATIONAL_INSTITUTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EducationalInstitution
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_JCQ_EDUCATIONAL_INSTITUTION, $id);
    }

    /**
     * @return string
     */
    public function getCenterNumber()
    {
        return $this->getProperty('centerNumber');
    }

    /**
     * @param string $centerNumber
     */
    public function setCenterNumber(string $centerNumber = null)
    {
        $this->setProperty('centerNumber', $centerNumber);
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->getProperty('countryCode');
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode = null)
    {
        $this->setProperty('countryCode', $countryCode);
    }
}
