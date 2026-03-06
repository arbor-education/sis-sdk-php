<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class IntegrationsVleProviderAcademicUnit extends ModelBase
{
    public const ACADEMIC_UNIT = 'academicUnit';

    protected $_resourceType = ResourceType::INTEGRATIONS_VLE_PROVIDER_ACADEMIC_UNIT;

    /**
     * @param Query $query
     * @return IntegrationsVleProviderAcademicUnit[] | Collection
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

        $query->setResourceType(ResourceType::INTEGRATIONS_VLE_PROVIDER_ACADEMIC_UNIT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return IntegrationsVleProviderAcademicUnit
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTEGRATIONS_VLE_PROVIDER_ACADEMIC_UNIT, $id);
    }

    /**
     * @return \Arbor\Model\AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param \Arbor\Model\AcademicUnit $academicUnit
     */
    public function setAcademicUnit(\Arbor\Model\AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
    }
}
