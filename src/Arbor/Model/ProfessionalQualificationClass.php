<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ProfessionalQualificationClass extends ModelBase
{
    public const CODE = 'code';

    public const ACTIVE = 'active';

    public const DATA_ORDER = 'dataOrder';

    public const PROFESSIONAL_QUALIFICATION_TYPE = 'professionalQualificationType';

    public const DESCRIPTION = 'description';

    protected $_resourceType = ResourceType::PROFESSIONAL_QUALIFICATION_CLASS;

    /**
     * @param Query $query
     * @return ProfessionalQualificationClass[] | Collection
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

        $query->setResourceType(ResourceType::PROFESSIONAL_QUALIFICATION_CLASS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProfessionalQualificationClass
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROFESSIONAL_QUALIFICATION_CLASS, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty('code');
    }

    /**
     * @param string $code
     */
    public function setCode(string $code = null)
    {
        $this->setProperty('code', $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty('dataOrder');
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder(int $dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return \Arbor\Model\ProfessionalQualificationType
     */
    public function getProfessionalQualificationType()
    {
        return $this->getProperty('professionalQualificationType');
    }

    /**
     * @param \Arbor\Model\ProfessionalQualificationType $professionalQualificationType
     */
    public function setProfessionalQualificationType(\Arbor\Model\ProfessionalQualificationType $professionalQualificationType = null)
    {
        $this->setProperty('professionalQualificationType', $professionalQualificationType);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
    }
}
