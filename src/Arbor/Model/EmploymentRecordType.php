<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmploymentRecordType extends ModelBase
{
    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const NAME = 'name';

    const IS_EMPLOYED = 'isEmployed';

    const EMPLOYER_REQUIRED = 'employerRequired';

    protected $_resourceType = ResourceType::EMPLOYMENT_RECORD_TYPE;

    /**
     * @param Query $query
     * @return EmploymentRecordType[] | Collection
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

        $query->setResourceType(ResourceType::EMPLOYMENT_RECORD_TYPE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmploymentRecordType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMPLOYMENT_RECORD_TYPE, $id);
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
    public function getIsEmployed()
    {
        return $this->getProperty('isEmployed');
    }

    /**
     * @param bool $isEmployed
     */
    public function setIsEmployed($isEmployed = null)
    {
        $this->setProperty('isEmployed', $isEmployed);
    }

    /**
     * @return bool
     */
    public function getEmployerRequired()
    {
        return $this->getProperty('employerRequired');
    }

    /**
     * @param bool $employerRequired
     */
    public function setEmployerRequired($employerRequired = null)
    {
        $this->setProperty('employerRequired', $employerRequired);
    }
}
