<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AcademicUnitTag extends ModelBase
{
    public const ACADEMIC_UNIT = 'academicUnit';

    public const RELATED_OBJECT = 'relatedObject';

    protected $_resourceType = ResourceType::ACADEMIC_UNIT_TAG;

    /**
     * @param Query $query
     * @return AcademicUnitTag[] | Collection
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

        $query->setResourceType(ResourceType::ACADEMIC_UNIT_TAG);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AcademicUnitTag
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ACADEMIC_UNIT_TAG, $id);
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

    /**
     * @return ModelBase
     */
    public function getRelatedObject()
    {
        return $this->getProperty('relatedObject');
    }

    /**
     * @param ModelBase $relatedObject
     */
    public function setRelatedObject(\ModelBase $relatedObject = null)
    {
        $this->setProperty('relatedObject', $relatedObject);
    }
}
