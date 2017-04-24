<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\ProfessionalQualificationType;

class ProfessionalQualificationClass extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const PROFESSIONAL_QUALIFICATION_TYPE = 'professionalQualificationType';

    const DESCRIPTION = 'description';

    protected $_resourceType = ResourceType::PROFESSIONAL_QUALIFICATION_CLASS;

    /**
     * @param \Arbor\Query\Query $query
     * @return ProfessionalQualificationClass[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("ProfessionalQualificationClass");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ProfessionalQualificationClass
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PROFESSIONAL_QUALIFICATION_CLASS, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return ProfessionalQualificationType
     */
    public function getProfessionalQualificationType()
    {
        return $this->getProperty("professionalQualificationType");
    }

    /**
     * @param ProfessionalQualificationType $professionalQualificationType
     */
    public function setProfessionalQualificationType(ProfessionalQualificationType $professionalQualificationType = null)
    {
        $this->setProperty("professionalQualificationType", $professionalQualificationType);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty("description");
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty("description", $description);
    }
}
