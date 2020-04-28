<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class InHouseExamInstanceAcademicUnitLink extends ModelBase
{
    const IN_HOUSE_EXAM_INSTANCE = 'inHouseExamInstance';

    const ACADEMIC_UNIT = 'academicUnit';

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM_INSTANCE_ACADEMIC_UNIT_LINK;

    /**
     * @param Query $query
     * @return InHouseExamInstanceAcademicUnitLink[] | Collection
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

        $query->setResourceType(ResourceType::IN_HOUSE_EXAM_INSTANCE_ACADEMIC_UNIT_LINK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return InHouseExamInstanceAcademicUnitLink
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IN_HOUSE_EXAM_INSTANCE_ACADEMIC_UNIT_LINK, $id);
    }

    /**
     * @return InHouseExamInstance
     */
    public function getInHouseExamInstance()
    {
        return $this->getProperty('inHouseExamInstance');
    }

    /**
     * @param InHouseExamInstance $inHouseExamInstance
     */
    public function setInHouseExamInstance(InHouseExamInstance $inHouseExamInstance = null)
    {
        $this->setProperty('inHouseExamInstance', $inHouseExamInstance);
    }

    /**
     * @return AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param AcademicUnit $academicUnit
     */
    public function setAcademicUnit(AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
    }
}
