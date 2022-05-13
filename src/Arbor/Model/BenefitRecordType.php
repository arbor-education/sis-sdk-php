<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BenefitRecordType extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const NAME = 'name';

    const APPLIES_TO_STUDENT = 'appliesToStudent';

    const APPLIES_TO_STAFF = 'appliesToStaff';

    const APPLIES_TO_GUARDIAN = 'appliesToGuardian';

    protected $_resourceType = ResourceType::BENEFIT_RECORD_TYPE;

    /**
     * @param Query $query
     * @return BenefitRecordType[] | Collection
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

        $query->setResourceType(ResourceType::BENEFIT_RECORD_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BenefitRecordType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BENEFIT_RECORD_TYPE, $id);
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
    public function setCode($code = null)
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
    public function setActive($active = null)
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
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty('dataOrder', $dataOrder);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return bool
     */
    public function getAppliesToStudent()
    {
        return $this->getProperty('appliesToStudent');
    }

    /**
     * @param bool $appliesToStudent
     */
    public function setAppliesToStudent($appliesToStudent = null)
    {
        $this->setProperty('appliesToStudent', $appliesToStudent);
    }

    /**
     * @return bool
     */
    public function getAppliesToStaff()
    {
        return $this->getProperty('appliesToStaff');
    }

    /**
     * @param bool $appliesToStaff
     */
    public function setAppliesToStaff($appliesToStaff = null)
    {
        $this->setProperty('appliesToStaff', $appliesToStaff);
    }

    /**
     * @return bool
     */
    public function getAppliesToGuardian()
    {
        return $this->getProperty('appliesToGuardian');
    }

    /**
     * @param bool $appliesToGuardian
     */
    public function setAppliesToGuardian($appliesToGuardian = null)
    {
        $this->setProperty('appliesToGuardian', $appliesToGuardian);
    }
}
