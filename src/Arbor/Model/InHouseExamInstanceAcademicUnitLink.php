<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class InHouseExamInstanceAcademicUnitLink extends ModelBase
{
    public const IN_HOUSE_EXAM_INSTANCE = 'inHouseExamInstance';

    public const ACADEMIC_UNIT = 'academicUnit';

    protected $_resourceType = ResourceType::IN_HOUSE_EXAM_INSTANCE_ACADEMIC_UNIT_LINK;

    /**
     * @param Query $query
     * @return InHouseExamInstanceAcademicUnitLink[] | Collection
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
     * @return \Arbor\Model\InHouseExamInstance
     */
    public function getInHouseExamInstance()
    {
        return $this->getProperty('inHouseExamInstance');
    }

    /**
     * @param \Arbor\Model\InHouseExamInstance $inHouseExamInstance
     */
    public function setInHouseExamInstance(\Arbor\Model\InHouseExamInstance $inHouseExamInstance = null)
    {
        $this->setProperty('inHouseExamInstance', $inHouseExamInstance);
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
